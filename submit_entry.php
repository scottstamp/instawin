<?php
// submit_entry.php
require_once "bootstrap.php";

$email = $_POST['email'];
$name = $_POST['name'];

//var_dump($_POST);

try {
    $entry = new Entry();
    $entry->setEmail($email);
    $entry->setName($name);
    $entry->setIpAddr($_SERVER['REMOTE_ADDR']);

    $em->persist($entry);
    $em->flush();
} catch (Exception $e) {
    die('{"status": 401, message: "Sorry, you have already entered once this round."}');
}

$query = $em->createQuery('SELECT COUNT(e.id) FROM Entry e');
$count = $query->getSingleScalarResult();

if ($count >= 3) {
    $prizes = $em->getRepository('Prize')->findBy(array('awarded' => false));
    $prize = $prizes[array_rand($prizes)];
    $prize->setAwarded(true);

    $offset = max(0, rand(0, 2));
    $query = $em->createQuery('SELECT DISTINCT e FROM Entry e')
        ->setMaxResults(1)->setFirstResult($offset);
    $winningEntry = $query->getScalarResult()[0];

    $winner = new Winner();
    $winner->setEmail($winningEntry['e_email']);
    $winner->setName($winningEntry['e_name']);
    $winner->setIpAddr($winningEntry['e_ip_addr']);
    $winner->setPrize($prize);

    $em->persist($prize);
    $em->persist($winner);
    $em->flush();

    $em->createQuery('DELETE FROM Entry')->execute();
}

echo '{"status": 200, message: "Thanks, your entry has been submitted!"}';
exit;
