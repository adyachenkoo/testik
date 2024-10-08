<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('articles')->insert([
            'title'=>'Загадочная вселенная: тайны космоса',
            'text'=>'На просторах бескрайних вод, где свет играет на поверхности, существует удивительный мир. Глубины океана, словно неведомый космос, полны тайных обитателей, каждый из которых имеет свою историю. Рыбы, как главные герои этой подводной симфонии, плавно скользят среди волновых движений. Их чешуя сверкает, отражая солнечные лучи, и иногда кажется, что они танцуют под водной мелодией.',
            'likes'=>13,
            'views'=>140,
        ]);
        DB::table('articles')->insert([
            'title'=>'Искусство мечты: как визуализировать свои цели',
            'text'=>'В этом царстве существуют и хищники, и жертвы, и они следуют великому закону жизни и выживания. Плывущие стаи меняют тотальные картины подводного мира, создавая иллюзии бесконечности. Некоторые рыбы, как цветные палитры художника, излучают яркие оттенки, а другие, словно тени, маскируются в окружении кораллов.',
            'likes'=>'22',
            'views'=>'162',
        ]);
        DB::table('articles')->insert([
            'title'=>'Природа и человек: поиск гармонии',
            'text'=>'Мир рыбы — это не только борьба за существование, но и гармония, созданная вечным круговоротом жизни. Эти создания вдохновляют поэтов и ученых, делая океан местом, полным мистики и чудес. В каждой волне, в каждом движении видится величие природного порядка, позволяющее нам задуматься о своих собственных путях и отношении к окружающей среде.',
            'likes'=>'423',
            'views'=>'1292'
        ]);
        DB::table('articles')->insert([
            'title'=>'Технологии будущего: что нас ждет через десять лет',
            'text'=>'Тёмная материя составляет примерно 27% нашей вселенной. В отличие от обычной материи, она не взаимодействует с электромагнитным излучением, что делает её невидимой для телескопов. Ученые предполагают, что без тёмной материи звезды не могли бы образоваться, а галактики не существовали бы в том виде, в каком мы их знаем. Исследования показывают, что её наличие подтверждается косвенными данными, такими как вращение галактик и гравитационные линзы. Учёные всё ещё пытаются найти прямые улики, чтобы лучше понять роль тёмной материи в формировании вселенной. Эта загадка остаётся одной из главных тем астрофизики.',
            'likes'=>'65',
            'views'=>'102'
        ]);
        DB::table('articles')->insert([
            'title'=>'Вкус мира: кулинарные традиции разных стран',
            'text'=>'Солнечная система — это только малая часть нашей галактики. Путешествие за её пределы представляет собой одну из самых амбициозных задач человечества. На данный момент единственным искусственным объектом, покинувшим пределы нашей системы, является межзвёздный зонд "Вояджер-1", который начал свой путь в 1977 году. Сейчас "Вояджер-1" находится более чем в 22 миллиардах километрах от Земли. Зонд передает данные о межзвёздной среде и уникальном окружении, что крайне важно для дальнейших исследований. Успехи современные космических миссий открывают новые горизонты для будущих исследований.',
            'likes'=>'93',
            'views'=>'137'
        ]);
        DB::table('articles')->insert([
            'title'=>'Литература и время: как книги формируют общество',
            'text'=>'Черные дыры являются одним из самых загадочных объектов во Вселенной. Эти области пространства обладают такой сильной гравитацией, что даже свет не может покинуть их. Наиболее известные черные дыры образуются в результате коллапса массивных звезд. Недавние исследования показывают, что черные дыры могут быть связаны с формированием галактик. Ученые обсуждают теории о том, могут ли черные дыры быть порталами в другие измерения. Эти обсуждения поднимают много интересных вопросов о природе пространства и времени.',
            'likes'=>'43',
            'views'=>'182'
        ]);
        DB::table('articles')->insert([
            'title'=>'Психология счастья: пути к внутреннему миру',
            'text'=>'Экзопланеты — планеты, которые находятся за пределами нашей солнечной системы. С начала 1990-х годов астрономы открыли тысячи экзопланет, каждая из которых потенциально может поддерживать жизнь. Большинство из них находятся в "зоне обитаемости", где температура позволяет существовать жидкой воде. Изучение экзопланет — это шаг к пониманию фундаментальных вопросов о жизни во Вселенной. Ученые разрабатывают новые методы и технологии для поиска и анализа этих далеких миров, что делает эту область астрономии одной из самых интересных и перспективных.',
            'likes'=>'2',
            'views'=>'199'
        ]);
        DB::table('articles')->insert([
            'title'=>'Экология и наша ответственность: спасем планету вместе',
            'text'=>'Заключительный этап жизни звезды может быть драматичным и внезапным. Звезды, превышающие по массе наше Солнце, в конце своей жизни проходят процесс коллапса. В результате из их остатков могут образовываться нейтронные звезды и черные дыры. Это явление наблюдается во вселенной, и астрономы разрабатывают модели для его понимания. Научные наблюдения за взрывами сверхновых предоставляют информацию о физике звёзд и их эволюции. Осознание этих процессов может объяснить многие аспекты формирования элементов, из которых состоит наша планета и все живые существа.',
            'likes'=>'12',
            'views'=>'17'
        ]);
        DB::table('articles')->insert([
            'title'=>'Искусство самовыражения: творчество как стиль жизни',
            'text'=>'Астероиды и кометы представляют собой остатки формирования нашей солнечной системы. Они могут помочь нам понять, как развивались планеты и какое влияние они имели на Землю. Например, удар астероида, который произошёл 66 миллионов лет назад, считается основной причиной массового вымирания динозавров. Современные миссии, такие как "Розетта" и "С глубин космоса", предоставляют новые данные о структуре и составе этих объектов. Это открывает возможные перспективы для предотвращения потенциальных угроз от астероидов и для изучения истоков жизни на Земле.',
            'likes'=>'14',
            'views'=>'131'
        ]);
        DB::table('articles')->insert([
            'title'=>'Спорт и здоровье: как сохранять активность в эпоху технологий',
            'text'=>'Телескопы играют ключевую роль в астрономии. С телескопами, находящимися за пределами атмосферы Земли, такими как "Хаббл", удалось получить уникальные снимки и данные о нашем космосе. Они помогают исследовать фазы рождения и эволюции звезд. Объекты, как например туманность Ориона, детально изучаются с помощью этих телескопов. Они также позволяют астрономам собирать данные о галактиках и других космических объектах, продвигая наше понимание.',
            'likes'=>'4',
            'views'=>'127'
        ]);
        DB::table('articles')->insert([
            'title'=>'Истории успеха: вдохновляющие примеры из жизни',
            'text'=>'Космос не только визуальное пространство, но и мир звуков. Ученые фиксируют радиоволны, которые излучаются различными астрономическими объектами. Эти звуки могут рассказать нам о природе планет, звезд и других небесных тел. Некоторые исследователи пытаются интерпретировать космические данные в музыкальных формах, создавая уникальные композиции, которые знакомят нас с многочисленными аспектами Вселенной. Эти проекты помогают привлечь внимание к астрономии и популяризируют науку среди широкой аудитории.',
            'likes'=>'3',
            'views'=>'183'
        ]);
        DB::table('articles')->insert([
            'title'=>'Музыка и эмоции: как мелодии влияют на наше состояние',
            'text'=>'Поиск жизни за пределами Земли — одна из самых волнующих тем в астрономии. Научные программы исследуют Марс, планеты-гиганты и экзопланеты в поисках следов жизни. Ключевыми факторами считаются наличие воды, атмосферы и необходимого химического состава. Недавние находки, такие как метановые всплески на Марсе, подогревают интерес к этому вопросу. Исследования экзопланет, на которых есть возможность существования жизни, становятся особенно актуальными. Это открывает новые горизонты для внеземной биологии и человечества в целом.',
            'likes'=>'92',
            'views'=>'196'
        ]);
    }
}
