<!DOCTYPE html>
<html>

<head>
  <?php include 'site__head.php'; ?>
</head>

<body>
  <div class="container">
    <?php include 'site__header.php'; include 'site__navigation--left.php'; ?>
    <div class="articleWrapper">
      <div class="article">
        <!--Main text-->
        <p class="article__epigraph">Если все думают, что цены поднимутся, цены поднимутся</p>
        <h1>Торговые сессии рынка Форекс </h1>
        <p>Торговля на рынке Форекс ведется 24 часа в сутки и прекращается только на выходные дни. Это означает, что войти в рынок, то есть открыть сделку, можно в любое время дня и ночи за исключением субботы и воскресенья.
          <br/> Условно принято выделять следующие региональные торговые сессии рынка Форекс:
          <ul>
            <li> Азиатская сессия </li>
            <li> Европейская сессия </li>
            <li> Американская сессия </li>
            <li>Тихоокеанская сессия (Австралия, Новая Зеландия) </li>
          </ul>
          <p>&nbsp;</p>
          <table width="100%" border="0" cellspacing="1" cellpadding="8">
            <tr class="hh">
              <td valign="middle">Регион
                <p>&nbsp; </p>
              </td>
              <td>Время открытия, мск
                <p>&nbsp;</p>
              </td>
              <td>Время закрытия, мск
                <p>&nbsp;</p>
              </td>
            </tr>
            <tr>
              <td>Азия</td>
              <td>03:00</td>
              <td>13:00</td>
            </tr>
            <tr class="hh">
              <td>Европа</td>
              <td>9:00</td>
              <td>20:00</td>
            </tr>
            <tr>
              <td>Америка</td>
              <td>16:00</td>
              <td>24:00</td>
            </tr>
            <tr class="hh">
              <td>Австралия и Новая Зеландия</td>
              <td>00:00</td>
              <td>10:00</td>
            </tr>
          </table>
          <p>&nbsp;</p>
          <p>Наиболее интенсивная торговля и, соответственно, наиболее сильные движения рынка происходят в интервале от 16:00 до 20:00 по московскому времени. Это тот период времени, когда Европейская сессия еще не закрылась, а Американская уже открылась.</p>
          <p><b><i>УДАЛЕНИЕ</i></b></p>
          <p><b><i>Не работает нижняя ссылка на фундаментальный анализ</i></b></p>
          <?php $page_prev='fa.php' ; $page_next='torg.php' ; include 'site__article-pagination.php'; ?>
      </div>
      <!--End Main text-->
    </div>
    <!--End conteyner2-->
    <div class="footer">© 2010 Copyright </div>
  </div>
</body>

</html>
