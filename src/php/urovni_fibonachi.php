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
        <p class="article__epigraph">Берешь чужие — и на время, отдаешь свои — и навсегда</p>
        <h1>Уровни Фибоначчи</h1>
        <p>Числа Фибоначчи – прекрасный инструмент анализа разнообразных, иногда хаотичных процессов, происходящих на международном валютном рынке. </p>
        <p>Наиболее распространенные инструменты технического анализа, основанные на числах Фибоначчи, это дуги, веера и уровни коррекции. Применение указанных инструментов предусматривает построение различных линий, уровней Фибоначчи, которые по существу являются уровнями поддержки или сопротивления. Достигая этих уровней, цены либо тестируют их, чтобы затем возобновить движение по тренду, либо пробивают их и тогда тренд может замедлить свое движение или развернуться вспять.</p>
        <p>На странице «Тренд» мы говорили о том, что цены движутся вверх, вниз или вбок не прямолинейно, а зигзагообразно. Поэтому рост (снижение) цен, как правило, сопровождается так называемыми откатами. Такие откаты еще называют коррекцией тренда. Так вот числа (коэффициенты) Фибоначчи позволяют определить глубину коррекции (отката). Чаще всего при построении подобных линий используются следующие соотношения Фибоначчи: <b>0.236, 0.382, 0.618, 1, 1,618, 2,61 …, или в виде процентов: 23.6%, 38.2%, 61.8%...</b></p>
        <p>Торговый терминал MetaTrader предусматривает возможность работы с уровнями Фибоначчи. <b>Уровни накладываются между двумя экстремумами, в зависимости от того, в какую сторону двигалась цена. Если цена повышается, то уровни располагаются от минимума к максимуму и наоборот.</b></p>
        <p>Рассмотрим на примере.</p>
        <p>Для того, чтобы определить глубину отката воспользуемся уровнями Фибоначчи. Прежде всего, следует нажать кнопку с буквой F (показано стрелкой на рисунке):</p>
        <div class="img">
          <img src="img/pic3.png" width="361" height="156" />
        </div>
        <p>Затем необходимо соединить максимальное значение с промежуточным минимальным значением (см. рис.). Мы видим, что коррекция нисходящего тренда оказалась равной 38.2%. Причем уровни Фибоначчи указали нам глубину отката удивительно точно.</p>
        <div class="img">
          <img src="img/pic4.png" width="443" height="365" />
        </div>
        <p>Еще пример. Теперь на восходящем тренде.</p>
        <div class="img">
          <img src="img/pic5.png" width="380" height="324" />
        </div>
        <p>Соединяем минимальное значение с промежуточным максимальным значением. И в данном случае уровни Фибоначчи достаточно точно показали коррекцию восходящего тренда, которая также оказалась равна 38.2%.</p>
        <p>Справедливости ради стоит заметить, что далеко не всегда уровни Фибоначчи столь точно указывают глубину коррекции (отката). Иногда цены ведут себя так, как будто этих уровней не существует.</p>
        <?php $page_prev='posled_chisel_fibonachi.php' ; $page_next='zakon_voln_elliota.php' ; include 'site__article-pagination.php'; ?>
        <!--End Main text-->
      </div>
      <!--End conteyner2-->
      <div class="footer">© 2010 Copyright</div>
    </div>
</body>

</html>