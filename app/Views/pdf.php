<?= $this->extend('default') ?>
<?= $this->section('content') ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>
<script type="text/javascript">
    function pdf() {
        var doc = new jsPDF();
        doc.setFontSize(25)
        doc.text(85, 10, "Relatorio")
        doc.setFontSize(14)
        doc.text(10, 30, "Id                date                                 description                               value            type")
        <?php
        $data = $this->data;
        $numero = 40;
        foreach ($data['moviments'] as $moviment) {
            echo 'doc.text(10, ' . $numero . ', "' . $moviment['id'] . '")
            ';
            echo 'doc.text(22, ' . $numero . ', "' . $moviment['date'] . '")
            ';
            echo 'doc.text(75, ' . $numero . ', "' . $moviment['description'] . '")
            ';
            echo 'doc.text(157, ' . $numero . ', "R$ ' . $moviment['value'] . '")
            ';
            echo 'doc.text(185, ' . $numero . ', "' . $moviment['type'] . '")
            ';
            $numero += 7;
        }
        echo 'doc.text(25, 200, "Saldo: R$ ' . $data['cash_balance'] . '")
        ';
        $input = round($data['input'], 2);
        echo 'doc.text(80, 200, "Entrada: R$ ' . $input . '")
        ';
        echo 'doc.text(140, 200, "Saida: R$ ' . $data['output'] . '")
        ';
        ?>
        doc.save('relatorio.pdf');


    }
</script>
<div class="container">
    <div class="row">
        <div class="col-12 text-center">
            <button type="button" class="btn btn-dark mt-3 p-3 fs-6" onclick="pdf()">Emitir relatório</button>
        </div>
    </div>
</div>
<?= $this->endSection() ?>