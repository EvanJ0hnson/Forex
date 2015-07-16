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
        <p class="article__epigraph">Нет такой плохой ситуации, которая не могла бы стать еще хуже</p>
        <h1>Пивотные точки</h1>
        <p>Что такое пивотные точки?</p>
        <p>Пивотные точки – это опорные точки, потенциальные уровни поддержки и сопротивления, которые можно рассчитать на сегодня на основании вчерашнего движения цены. Поэтому их можно рассматривать в качестве опережающих индикаторов.</p>
        <p>Однако следует иметь в виду, что пивотные точки отличаются от уровней поддержки S и уровней сопротивления R, описанных в разделе «Технический анализ». Уровни S и R -результат субъективного анализа конкретного трейдера.
          <br>Пивотные точки не субъективны, они рассчитываются по определенному алгоритму.
          <br>Сначала определяется центральная пивотная точка (PP), затем - пивотные уровни сопротивлений (R1, R2, R3) и поддержек (S1, S2, S3).</p>
        <p><b>Формулы расчета уровней следующие:</b></p>
        <ul>
          <li>1. PP = (HIGH + LOW + CLOSE)/3</li>
          <li>2. Первый уровень сопротивления (R1) = (PP*2) - L OW</li>
          <li>3. Второй уровень сопротивления (R2) = PP + (HIGH – LOW)</li>
          <li>4. Третий уровень сопротивления (R3) = R2 + (HIGH – LOW)</li>
          <li>5. Первый уровень поддержки (S1) = (PP*2) - HIGH</li>
          <li>6. Второй уровень поддержки (S2) = PP - (HIGH - LOW)</li>
          <li>7. Третий уровень поддержки (S3) = S2 - (HIGH - LOW)</li>
        </ul>
        <p>Понятно, что HIGH и LOW – это экстремальные значения цены, зафиксированные в течение торгового периода (торговой сессии). А CLOSE – цена закрытия за тот же период.</p>
        <p>Полученные значения пивотных точек следует отразить на временных ценовых графиках и для наглядности провести через них горизонтальные линии. Таким образом, мы получим расчетные пивотные уровни поддержек и сопротивлений.</p>
        <p>Еще раз подчеркнем: не следует их путать с линиями поддержки и сопротивления, полученными графически, путем проведения линий (кстати, не обязательно горизонтальных) через вершины и донышки (минимумы и максимумы) временных ценовых графиков.</p>
        <p>Рассчитали мы пивотные точки, провели через них горизонтальные линии и что дальше? Все дальнейшее зависит от нашего к ним отношения. Некоторые трейдеры свято верят в то, что пивотные точки – это те уровни, на которых движение цены должно либо замедлиться, либо остановиться.</p>
        <p>По их мнению, если цены идут вверх и достигают уровня R1, то именно здесь может произойти замедление или остановка движения цены. Если же этого не происходит и цены пробивают уровень R1, то следующим барьером на пути восходящего движения цен может стать пивотный уровень R2, и т. д.</p>
        <p>Аналогичную картину будем наблюдать, если цены устремятся вниз. Сначала они достигают пивотного уровня S1, и уже на этом уровне возможно замедление либо остановка нисходящего тренда. Если же этот уровень пробивается, то следующим возможным барьером может быть пивотный уровень S2 и т.д.</p>
        <p>Смысл всей этой концепции (между прочим, никем не подтвержденной) в том, что при достижении ценами пивотных уровней, трейдеры могут принимать решения о продолжении работы в рынке либо о закрытии позиций.</p>
        <p>Уважаемые чайники, пробуйте (лучше на учебном счете) и решайте сами – имеют ли пивотные уровни какую-либо ценность или нет.</p>
        <p>В идеале это могло бы выглядеть примерно так:</p>
        <div class="img">
          <img src="img/pic2.png" width="533" height="332" />
        </div>
        <p>Цены, пройдя центральную пивотную точку, дошли до уровня R1, отразились от него и вернулись к центральной пивоной точке. Затем вновь пошли вверх, пробили уровень R1 и устремились к уровню R2, пробить который не удалось. По логике данной концепции на уровне R2 следует закрыть длинную позицию, если она не была закрыта раньше на уровне R1.</p>
        <p>К сожалению, следует честно признать, что на практике цены восходят или нисходят, совершенно не реагируя на пивотные точки.</p>
        <?php $page_prev='obv16.php' ; $page_next='jpn_12.php' ; include 'site__article-pagination.php'; ?>
        <!--End Main text-->
      </div>
      <!--End conteyner2-->
      <div class="footer">© 2010 Copyright</div>
    </div>
</body>

</html>