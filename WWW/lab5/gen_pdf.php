<?php
    require('tfpdf/tfpdf.php');

    $mysqli = new mysqli("localhost","f0522859_ilya","ilya","f0522859_ilya");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к БД";
    }

    $pdf = new tFPDF();
    $pdf->AddFont('PDFFont','','pixel.ttf');
    $pdf->SetFont('PDFFont','',12);
    $pdf->AddPage();

    $pdf->Cell(80);
    $pdf->Cell(30,10,'ОС',1,0,'C');
    $pdf->Ln(20);

    $pdf->SetFillColor(200,200,200);
    $pdf->SetFontSize(6);

    $header = array("п/п","Название","Тип оборудования","Разрядность","Разработчик","Ключ","Дата приобретения","Дата окончания","URL магазина");
    $w = array(6,30,25,25,25,20,20,17,25);
    $h = 10;
    for ($c = 0; $c < 9; $c++){
        $pdf->Cell($w[$c],$h,$header[$c],'LRTB','0','',true);
    }
    $pdf->Ln();

    // Запрос на выборку сведений о пользователях
    $result = $mysqli->query("SELECT
        os.name_os as name_os,
        os.type_eq as type_eq,
        os.bit_dep as bit_dep,
        os.developer as developer,
        os_keys.cod as cod,
        os_keys.date_acq,
        os_keys.date_end,
        store.url_store as store_url
        FROM os_keys
        LEFT JOIN os ON os_keys.name_os=os.id
        LEFT JOIN store ON os_keys.name_store=store.id"
    );

    if ($result){
        $counter = 1;
        // Для каждой строки из запроса
        while ($row = $result->fetch_row()){
            $pdf->Cell($w[0],$h,$counter,'LRBT','0','C',true);
            $pdf->Cell($w[1],$h,$row[0],'LRB');

            for ($c = 2; $c < 9; $c++){
                $pdf->Cell($w[$c],$h,$row[$c-1],'RB');
            }
            $pdf->Ln();
            $counter++;
        }
    }

    $pdf->Output("I",'OS.pdf',true);
?>
