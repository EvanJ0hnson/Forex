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
        <p class="article__epigraph">Чтобы жить - нужно работать, а чтобы разбогатеть - нужно придумать что-нибудь другое</p>
        <h1>Торговая система №2</h1>
        <p>Алгоритм работы:</p>
        <p>1. Определение тренда на недельном графике
          <br/> 2. Анализ стохастического осциллятора на дневном графике
          <br/> 3. Определение завершения отката
          <br/> 4. Определение точки входа (вход в рынок)
          <br/> 5. Определение точки выхода (выход из рынка) </p>
        <p>Теперь подробно.</p>
        <h2>1.Определение тренда на недельном графике.</h2>
        <p>Тренд на недельном графике определяется хорошо известными способами, а именно с помощью:</p>
        <p>1. Построения линии тренда </p>
        <p>2. Скользящих средних </p>
        <p>3. Индикатора МАСД </p>
        <p>4. Индикатора Parabolic Sar и т.д. </p>
        <p><b><i>ПРОБЕЛ</i></b></p>
        <div class="img">
          <img src="img/r144.gif" width="525" height="319" />
        </div>
        <h2><b><i>ПРОБЕЛ</i></b></h2>
        <h2>2. Анализ стохастического осциллятора на дневном графике</h2>
        <p>Некоторые далеко продвинутые финансовые аналитики полагают, что:</p>
        <p>1. Если тренд на недельном графике &mdash; восходящий, а стохастик на дневном графике в зоне перепроданности, следует немедленно открыть сделку на покупку, не дожидаясь выхода индикатора из зоны, пересечения линий индикатора и т.д.</p>
        <p>2. Если тренд на недельном графике &mdash; нисходящий, а стохастик на дневном графике в зоне перекупленности, следует немедленно открыть сделку на продажу, не дожидаясь выхода индикатора из зоны, пересечения линий индикатора и т.д.</p>
        <p><b><i>ПРОБЕЛ</i></b></p>
        <div class="img">
          <img src="img/r145.gif" width="519" height="314" />
        </div>
        <p><b><i>ПРОБЕЛ</i></b></p>
        <p>Другими словами, они ограничивают предлагаемый алгоритм ТС2 всего 2-я пунктами. Флаг им в руки.</p>
        <p>Но нам, чайникам, людям осторожным и недоверчивым, убедившись в том, что стохастик на дневном графике находится в зоне перепроданности или перекупленности, лучше всего обратиться к п.3. </p>
        <h2>3. Определение завершения отката</h2>
        <p>Не мудрствуя лукаво, поступим точно так, как мы это делали в ТС1. Обратимся к часовому графику той же валютной пары:</p>
        <p><b><i>ПРОБЕЛ</i></b></p>
        <div class="img">
          <img src="img/r138.gif" width="522" height="315" />
        </div>
        <p><b><i>ПРОБЕЛ</i></b></p>
        <p>И чтобы вычислить момент окончания отката, воспользуемся разнообразными сигналами:</p>
        <p>1. Цены пробили линию тренда (синяя линия) на ценовом графике. </p>
        <p>2. Parabolic меняет свое положение относительно цен, что также указывает на завершение нисходящей тенденции на часовом графике.</p>
        <p>3. На МАСД дивергенция (бычье схождение) &mdash; сильнейший сигнал.</p>
        <p>4. На МАСД произошло пробитие сигнальной линии снизу вверх в отрицательной зоне. </p>
        <p>Все эти сигналы в совокупности, подтверждая друг друга, указывают на момент завершения отката, а это значит, что назрел оптимальный момент входа в рынок. Другими словами, у нас есть все основания для открытия длинной позиции по тренду на недельном графике.</p>
        <h2>4. Определение точки входа (вход в рынок)</h2>
        <p>Вход в рынок осуществляем в соответствии алгоритмом ТС1. Напомним:</p>
        <ul>
          <li>Если мы покупаем, т.е. открываем длинную позицию, то S/L лучше устанавливать ниже последнего донышка. </li>
          <li>Если мы продаем, т.е. открываем короткую позицию, то S/L лучше устанавливать выше последней вершины</li>
          <li>И в том и в другом случае S/L должен находиться на расстоянии не менее 50 пунктов от текущей цены (Pr &mdash; отложенный ордер), иначе его ”слижут” колебания ценового графика.</li>
          <li>T/P целесообразно устанавливать на расстоянии примерно вдвое большем от текущей цены, нежели S/L, т.е. ориентировочно 100 пунктов.</li>
        </ul>
        <h2>5. Определение точки выхода (выход из рынка)</h2>
        <p>Открытую позицию удерживаем до тех пор, пока Parabolic sar не изменит свое положение относительно цен (см. рис.) на дневном или недельном графике. Выбор за трейдером.</p>
        <?php $page_prev='torg1.php' ; $page_next='torg3.php' ; include 'site__article-pagination.php'; ?>
      </div>
      <!--End Main text-->
    </div>
    <!--End conteyner2-->
    <div class="footer">© 2010 Copyright </div>
  </div>
  <table </body>

</html>
