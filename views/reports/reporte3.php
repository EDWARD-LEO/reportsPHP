<page>

  <page_header>
    <div>
      <p>Cabecera para reporte de países</p>
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
        <th>Código</th>
        <th>País</th>
        <th>Región</th>
        <th>Extensión</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($listaPaises as $unPais): ?>
      <tr>
        <td><?= $unPais['Code'] ?></td>
        <td><?= $unPais['Name'] ?></td>
        <td><?= $unPais['Region'] ?></td>
        <td><?= $unPais['SurfaceArea'] ?></td>
      </tr>       
      <?php endforeach ?>
     </tbody>
  </table>

</page>