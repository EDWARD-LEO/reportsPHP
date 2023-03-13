<page>

  <page_header>
    <div>
      <p>Cualquier contenido de cabecera</p>
    </div>
  </page_header>

  <page_footer>
    <!-- Solo incluirá número de página -->
    <div><p class='tc'>[[page_cu]]</p></div>
  </page_footer>

  <!-- Contenido de la página a partir de aquí -->
  <br />
  <table class='mt-5 tborder' width="100%">
    <colgroup>
      <col style="width: 10%">
      <col style="width: 30%">
      <col style="width: 30%">
      <col style="width: 30%">
    </colgroup>
    <thead>
      <tr>
        <th>#</th>
        <th>Apellidos</th>
        <th>Nombres</th>
        <th>Dirección</th>
      </tr>
    </thead>
    <tbody>
      <?php for ($i = 1; $i <= 20; $i++):?>
      <tr>
        <td><?= $i ?></td>
        <td>Apellido #<?= $i ?></td>
        <td>Nombre #<?= $i ?></td>
        <td>Dirección #<?= $i ?></td>
      </tr>       
      <?php endfor ?>
     </tbody>
  </table>

</page>