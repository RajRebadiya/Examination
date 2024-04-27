<?php
include "config.php";
require_once('tcpdf-main/tcpdf.php');

session_start();
if (isset($_SESSION['username']) || $_SESSION['admin']) {
    $user_id = $_SESSION['id'];
    $serch = "SELECT * FROM faculty_data WHERE f_id='$user_id'";
    $result = mysqli_query($con, $serch);

    // Check if the query was successful and $result is not false
    if ($result) {
        $rowarray = [];

        while ($rows = mysqli_fetch_assoc($result)) {
            $rowarray[] = $rows;
        }

        // Calculate total duration and total amount
        $totalDuration = 0;
        $totalAmount = 0;

        foreach ($rowarray as $row) {
            $totalDuration += floatval($row['duration']);
            $totalAmount += $row['amout'];
        }

        // Create a new PDF instance
        $pdf = new TCPDF();
        $pdf->SetMargins(10, 10, 10);
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('helvetica', '', 10);

        // University Name
        $universityName = "Veer Narmad South Gujarat University";
        $html = '<h1 style="text-align:center;">' . $universityName . '</h1>';
        $html .= '<br><br>';

        // Faculty ID and Faculty Name
        $facultyID = $rowarray[0]['f_id'];
        $facultyName = $rowarray[0]['f_name'];
        $html .= '<p><strong>Faculty ID:</strong> ' . $facultyID . '</p>';
        $html .= '<p><strong>Faculty Name:</strong> ' . $facultyName . '</p>';

        // Header
        $html .= '<br><h2 style="text-align:center;">Faculty Data</h2>';
        $html .= '<table border="1" cellpadding="4" cellspacing="0">
                    <tr>
                        <th>Data ID</th>
                        <th>Faculty Name</th>
                        <th>Class Name</th>
                        <th>Duration</th>
                        <th>Exam Type</th>
                        <th>Exam Pattern</th>
                        <th>Department Name</th>
                        <th>Amount</th>
                    </tr>';

        // Add data rows
        foreach ($rowarray as $row) {
            $html .= '<tr>';
            $html .= '<td>' . $row['data_id'] . '</td>';
            $html .= '<td>' . $row['f_name'] . '</td>';
            $html .= '<td>' . $row['class_name'] . '</td>';
            $html .= '<td>' . $row['duration'] . '</td>';
            $html .= '<td>' . $row['exam_type'] . '</td>';
            $html .= '<td>' . $row['exam_pettarn'] . '</td>';
            $html .= '<td>' . $row['department_name'] . '</td>';
            $html .= '<td>' . $row['amout'] . '</td>';
            $html .= '</tr>';
        }

        $html .= '</table>';

        // Add total duration and total amount table
        $html .= '<br><br><table border="1" cellpadding="4" cellspacing="0">
                    <tr>
                        <th>Total Duration</th>
                        <th>Total Amount</th>
                    </tr>';
        $html .= '<tr>';
        $html .= '<td>' . $totalDuration . '</td>';
        $html .= '<td>' . $totalAmount . '</td>';
        $html .= '</tr>';
        $html .= '</table>';

        // Output HTML content
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output the PDF to the browser
        $pdf->Output('faculty_data_report.pdf', 'I');
    } else {
        // Handle the case where the query was not successful
        die('Error: Unable to execute database query.');
    }
} else {
    header("Location:login.php");
}
?>
