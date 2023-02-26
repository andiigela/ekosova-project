<?php
include_once 'candidateMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new CandidateMapper();
    $mapper->deleteCandidate($userId);
    header("Location:../allCandidates.php");
}