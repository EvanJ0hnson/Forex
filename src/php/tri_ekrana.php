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
        <p class="article__epigraph">Если ты умнее всех, кто это поймет</p>
        <h1>Система «Три экрана»</h1>
        <p>Широко известная система трех экранов Элдера сама по себе торговой системой не является. Это скорее идея, суть которой в том, чтобы определить тренд и работать в рынке исключительно по тренду.</p>
        <p>В основе системы «Трех экранов» лежит последовательный анализ трех ценовых графиков различного временного масштаба: недельного, дневного и часового.</p>
        <p>Для начала откроем в торговом терминале три графика одного инструмента (например, EUR/USD) - недельный, дневной и часовой. Выберем индикаторы, которые помогут нам определить направление тренда (MACD, скользящие средние и т.д.).</p>
        <p>Последовательность действий в рамках данной системы такова:</p>
        <ul>
          <li>— Анализируем недельный график (первый экран).
            <br> Предположим, анализ показывает наличие повышательной тенденции на недельном графике. На это может указывать и положительный наклон линии тренда, и скользящие средние, и индикатор MACD. При желании для определения тренда можно использовать и другие индикаторы.
          </li>
          <li>— Анализируем дневной график (второй экран).
            <br> Наш анализ направлен на то, чтобы выявить на дневном графике восходящую тенденцию, как и на недельном графике. Если восходящая тенденция, действительно, имеет место, переходим к анализу часового графика.
          </li>
          <li>— Анализируем часовой график (третий экран).
            <br> На часовом графике ждем, когда образуется коррекционное движение (откат) и после его завершения осуществляем вход в рынок. Под откатом следует понимать образование на часовом графике тенденции, противоречащей основному тренду. В нашем случае это краткосрочная понижательная тенденция. Как только она заканчивается, открываем длинную позицию в направлении глобального восходящего тренда.
          </li>
        </ul>
        <p>Разумеется, систему «Трех экранов» можно использовать и тогда, когда на недельном и дневном графиках наблюдается нисходящая тенденция.</p>
        <p>Практическое использование системы «Трех экранов» показано в рассматриваемых далее «Торговых стратегиях».</p>
        <?php $page_prev='torg.php' ; $page_next='torg1.php' ; include 'site__article-pagination.php'; ?>
        <!--End Main text-->
      </div>
      <!--End conteyner2-->
      <div class="footer">© 2010 Copyright</div>
    </div>
</body>

</html>