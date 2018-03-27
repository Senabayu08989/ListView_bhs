<?php
// output the HTML content
$pdf->writeHTML($content, true, true, true, true, '');

// reset pointer to the last page
$pdf->lastPage();
// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('label_ffa.pdf', 'I');

?>