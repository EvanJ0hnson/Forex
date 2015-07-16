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
        <p class="article__epigraph">Всех денег не заработаешь</p>
        <h1>Торговая система №4</h1>
        <p>Этапы построения торговой системы:</p>
        <p>1. Определение тренда на графике большого масштаба
          <br/> 2. Выявление коррекции (отката) и момента ее завершения на графике меньшего масштаба
          <br/> 3. Вход в рынок с помощью индикатора силы и установка ”стопов” (S/L и T/P)
          <br/> 4. Определение точки выхода (выход из рынка).</p>
        <p><b><i>УБРАТЬ ПРОБЕЛ</i></b></p>
        <p>На первой и второй частях торговой системы останавливаться подробно не будем, они подробно описаны в предыдущих главах. Как определять момент завершения отката, мы тоже знаем. Напомним только, что тренд на графике большого масштаба (в нашем случае это может быть дневной график) определяем для того, чтобы открывать сделки только в направлении этого тренда. А рабочим будет часовой график.</p>
        <p>Третья часть заслуживает более подробного описания. Но прежде чем к ней перейти имеет смысл обратиться к главе, где подробно описаны возможности индикатора ”индекс силы”. </p>
        <p>Итак, активная работа по этой системе начинается именно с момента завершения отката на часовом графике. Вслед за этим на часовом графике начинает восстанавливаться тренд, совпадающий по направлению с глобальным трендом на графике большого масштаба. Вот именно этот тренд на часовом графике мы и будем анализировать с помощью индикатора ”индекс силы”.</p>
        <p>Рассмотрим на примере.</p>
        <p><b><i>ПРОБЕЛ</i></b></p>
        <p>
          <img src="img/r154.gif" width="520" height="316" />
        </p>
        <p><b><i>ПРОБЕЛ</i></b></p>
        <p>Если тренд на часовом графике восходящий, то падения СС2 от индекса силы в отрицательную зону покажут на лучшие моменты для покупки.</p>
        <p>Если тренд на часовом графике нисходящий, то подъем СС2 от индекса силы в положительную зону покажет лучшие моменты для продажи.</p>
        <p>Направление тренда на часовом графике подтверждается положительным или отрицательным наклоном СС13 (для подтверждения направления тренда могут быть использованы и другие индикаторы).</p>
        <p>Если тренд на ценовом графике большого масштаба восходящий, открываем только длинные позиции <em>(buy).</em>
          <br/> Если тренд на ценовом графике большого масштаба нисходящий, открываем только короткие позиции <em>(sell).</em></p>
        <p><b><i>ПРОБЕЛ</i></b></p>
        <p>Защитные приостановки расставляем так, как это указано в ТС2, а именно:</p>
        <ul>
          <li>Если мы покупаем, т.е. открываем длинную позицию, то S/L лучше устанавливать ниже последнего донышка. </li>
          <li>Если мы продаем, т.е. открываем короткую позицию, то S/L лучше устанавливать выше последней вершины</li>
          <li>И в том и в другом случае S/L должен находиться на расстоянии не менее 50 пунктов от текущей цены (Pr &mdash; отложенный ордер), иначе его ”слижут” колебания ценового графика.</li>
          <li>T/P целесообразно устанавливать на расстоянии примерно вдвое большем от текущей цены, нежели S/L, т.е. ориентировочно 100 пунктов.</li>
        </ul>
        <p><b><i>ПРОБЕЛ</i></b></p>
        <p>Определение точки выхода (выход из рынка).</p>
        <p>Точку выхода лучше всего определять с помощью индикатора Parabolic sar.</p>
        <p>Если Parabolic меняет свое положение относительно ценового графика сделку лучше закрыть.
          <br/> Но есть и другой способ определения точки выхода. Открытую позицию удерживаем до тех пор, пока цены находятся выше (ниже) СС13, а СС13 выше (ниже) СС21. Как только цены пересекают скользящие средние сверху вниз (снизу вверх), сделку следует закрыть.
          <br/>
        </p>
        <p><em><b>Тем более сделку необходимо немедленно закрыть, если скользящие средние пересекаются.</b></em>
        </p>
        <?php $page_prev='torg3.php' ; $page_next='torg5.php' ; include 'site__article-pagination.php'; ?>
      </div>
      <!--End Main text-->
    </div>
    <!--End conteyner2-->
    <div class="footer">© 2010 Copyright </div>
  </div>
</body>

</html>
