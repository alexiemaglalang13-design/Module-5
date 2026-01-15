<?php
//Variables
$school = "HOLY ANGEL UNIVERSITY";
$fullname = "Alexie Maglalang";
$string = "   Oh, Happy January Everyone!   ";

$sample = "BTS is Coming Back!";
$bts = "Jungkook,Taehyung,Jimin,Namjoon,Hoseok,Yoongi,Seokjin";
$ticket = 9000.263;
$min = 1;
$max = 7;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Built-in String Functions</title>
    <style>
      * {
          box-sizing: border-box;
      }

      body {
          font-family: Arial, Helvetica, sans-serif;
          background-color: #f6f8f9;
          color: #202020;
          padding: 30px;
      }

      p {
          text-align: center;
          color: #2c3e50;
      }

      h1 {
          text-align: center;
          margin-bottom: 20px;
          color: #2c3e50;
      }

      h2 {
          margin-top: 40px;
          color: #2c3e50;
      }

      table {
          width: 100%;
          border-collapse: collapse;
          background-color: #ffffff;
          margin-top: 15px;
      }

      th {
          background-color: #4ECDC4;
          color: #ffffff;
          text-align: left;
          padding: 12px;
          font-weight: bold;
      }

      td {
          padding: 12px;
          border: 1px solid #e0e0e0;
      }

      tr:nth-child(even) td {
          background-color: #eaf9f7;
      }

      td:first-child {
          width: 40%;
          font-weight: 600;
      }

      td:last-child {
          width: 60%;
          font-family: Consolas, monospace;
      }
    </style>
</head>

<body>
<h1>PHP Built-in String Functions</h1>
<p><i>Maglalang, Alexie T. | WD201</i></p>

<!--Changing-->
<h2>Changing the Case of Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Lowercase</td>
        <td><?= strtolower($school); ?></td>
    </tr>
    <tr>
        <td>Uppercase</td>
        <td><?= strtoupper($school); ?></td>
    </tr>
    <tr>
        <td>Capitalize</td>
        <td><?= ucwords(strtolower($school)); ?></td>
    </tr>
</table>

<!--Counting-->
<h2>Counting Characters and Words</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Number of Characters</td>
        <td><?= strlen($fullname); ?></td>
    </tr>
    <tr>
        <td>Number of Words</td>
        <td><?= str_word_count($fullname); ?></td>
    </tr>
</table>

<!--Removing and Replacing-->
<h2>Removing and Replacing Characters</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Trim Left</td>
        <td><?= ltrim($string, "   Oh, "); ?></td>
    </tr>
    <tr>
        <td>Trim Right</td>
        <td><?= rtrim($string, "!   "); ?></td>
    </tr>
    <tr>
        <td>Trim Both</td>
        <td><?= trim($string, "   Oh, !   "); ?></td>
    </tr>
    <tr>
        <td>String Replace</td>
        <td><?= str_replace("January", "February", $string); ?></td>
    </tr>
    <tr>
        <td>String iReplace</td>
        <td><?= str_ireplace("January", "March", $string); ?></td>
    </tr>
    <tr>
        <td>String Repeat</td>
        <td><?= str_repeat("Tour ", 3); ?></td>
    </tr>
</table>

<!--Other Functions-->
<h2>Other Useful String Functions</h2>
<table>
    <tr>
        <th>Function</th>
        <th>Result</th>
    </tr>
    <tr>
        <td>Substring</td>
        <td><?= substr($sample, 0, 4); ?></td>
    </tr>
    <tr>
        <td>String Position</td>
        <td><?= strpos($sample, "Back"); ?></td>
    </tr>
    <tr>
        <td>String Contains</td>
        <td><?= str_contains($sample, "Jungkook") ? "Yes" : "No"; ?></td>
    </tr>
    <tr>
        <td>Substring Occurances</td>
        <td><?= strstr($sample, "Coming"); ?></td>
    </tr>
    <tr>
        <td>Explode</td>
        <td><?= implode(", ", explode(",", $bts)); ?></td>
    </tr>
    <tr>
        <td>Random</td>
        <td><?= mt_rand($min, $max); ?></td>
    </tr>
    <tr>
        <td>Floor</td>
        <td><?= floor($ticket); ?></td>
    </tr>
    <tr>
        <td>Starts With</td>
        <td><?= str_starts_with($sample, "BTS") ? "True" : "False"; ?></td>
    </tr>
    <tr>
        <td>Ends With</td>
        <td><?= str_ends_with($sample, "Back!") ? "True" : "False"; ?></td>
    </tr>
</table>

</body>
</html>