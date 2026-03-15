<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Place;

class PlaceSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Категории
        $nature = Category::updateOrCreate(['slug' => 'nature'], ['name' => 'Природа и парки']);
        $lakes = Category::updateOrCreate(['slug' => 'lakes'], ['name' => 'Озера']);
        $arch = Category::updateOrCreate(['slug' => 'architecture'], ['name' => 'Архитектура и история']);

        // 2. Места и их галереи

        // --- 1. ТАГАНАЙ ---
        $p1 = Place::create([
            'category_id' => $nature->id,
            'title' => 'Национальный парк «Таганай»',
            'description' => 'Горные хребты, огромные каменные реки и реликтовые леса. Самое популярное место для походов на Южном Урале.',
            'address' => 'г. Златоуст',
            'lat' => 55.2213, 'lng' => 59.7335,
            'image' => 'taganay.jpg',
        ]);
        $p1->images()->createMany([['path' => 'taganay_1.jpg'], ['path' => 'taganay_2.jpg'], ['path' => 'taganay_3.jpg']]);

        // --- 2. ТУРГОЯК ---
        $p2 = Place::create([
            'category_id' => $lakes->id,
            'title' => 'Озеро Тургояк',
            'description' => 'Второе по чистоте озеро России. Прозрачность воды достигает 17 метров. На озере находится знаменитый остров Веры.',
            'address' => 'г. Миасс',
            'lat' => 55.1578, 'lng' => 60.0652,
            'image' => 'turgoyak.jpg',
        ]);
        $p2->images()->createMany([['path' => 'turgoyak_1.jpg'], ['path' => 'turgoyak_2.jpg'], ['path' => 'turgoyak_3.jpg']]);

        // --- 3. ЗЮРАТКУЛЬ ---
        $p3 = Place::create([
            'category_id' => $nature->id,
            'title' => 'Нацпарк «Зюраткуль»',
            'description' => 'Высокогорное озеро и хребет с панорамными видами. Здесь чистейший воздух и уникальная эко-тропа.',
            'address' => 'Саткинский район',
            'lat' => 54.9124, 'lng' => 59.2198,
            'image' => 'zyuratkul.jpg',
        ]);
        $p3->images()->createMany([['path' => 'zyuratkul_1.jpg'], ['path' => 'zyuratkul_2.jpg'], ['path' => 'zyuratkul_3.jpg']]);

        // --- 4. УВИЛЬДЫ ---
        $p4 = Place::create([ 
            'category_id' => $lakes->id,
            'title' => 'Озеро Увильды',
            'description' => 'Одно из самых крупных и живописных озер Урала с радоновыми источниками и множеством островов.',
            'address' => 'Аргаяшский район',
            'lat' => 55.5218, 'lng' => 60.5002,
            'image' => 'uvildy.jpg',
        ]);
        $p4->images()->createMany([['path' => 'uvildy_1.jpg'], ['path' => 'uvildy_2.jpg'], ['path' => 'uvildy_3.jpg']]);

        // --- 5. АРКАИМ ---
        $p5 = Place::create([
            'category_id' => $arch->id,
            'title' => 'Заповедник «Аркаим»',
            'description' => 'Древний город ариев, археологический комплекс бронзового века. Место паломничества и исторических открытий.',
            'address' => 'Брединский район',
            'lat' => 52.6433, 'lng' => 59.5639,
            'image' => 'arkaim.jpg',
        ]);
        $p5->images()->createMany([['path' => 'arkaim_1.jpg'], ['path' => 'arkaim_2.jpg'], ['path' => 'arkaim_3.jpg']]);

        // --- 6. СКАЗ ОБ УРАЛЕ ---
        $p6 = Place::create([
            'category_id' => $arch->id,
            'title' => 'Памятник «Сказ об Урале»',
            'description' => 'Величественный монумент на вокзальной площади Челябинска, олицетворяющий силу трудового Урала.',
            'address' => 'г. Челябинск, Привокзальная пл.',
            'lat' => 55.1415, 'lng' => 61.4158,
            'image' => 'ural.jpg',
        ]);
        $p6->images()->createMany([['path' => 'ural_1.jpg'], ['path' => 'ural_2.jpg'], ['path' => 'ural_3.jpg']]);

        // --- 7. МУЗЕЙ ---
        $p7 = Place::create([
            'category_id' => $arch->id,
            'title' => 'Исторический музей',
            'description' => 'Главное хранилище истории края. Здесь выставлен самый крупный фрагмент Челябинского метеорита.',
            'address' => 'г. Челябинск, ул. Труда, 100',
            'lat' => 55.1673, 'lng' => 61.3979,
            'image' => 'meteorite.jpg',
        ]);
        $p7->images()->createMany([['path' => 'meteorite_1.jpg'], ['path' => 'meteorite_2.jpg'], ['path' => 'meteorite_3.jpg']]);

        // --- 8. ПОРОГИ ---
        $p8 = Place::create([
            'category_id' => $arch->id,
            'title' => 'Урочище Пороги',
            'description' => 'Уникальная старинная плотина и ГЭС, работающая более 100 лет без капитального ремонта.',
            'address' => 'п. Пороги',
            'lat' => 55.2825, 'lng' => 59.1352,
            'image' => 'porogi.jpg',
        ]);
        $p8->images()->createMany([['path' => 'porogi_1.jpg'], ['path' => 'porogi_2.jpg'], ['path' => 'porogi_3.jpg']]);

        // --- 9. СОНЬКИНА ЛАГУНА ---
        $p9 = Place::create([
            'category_id' => $arch->id,
            'title' => 'Сонькина Лагуна',
            'description' => 'Сказочный тематический парк в стиле средневековья. Настоящий пиратский остров в самом центре Урала.',
            'address' => 'г. Сатка',
            'lat' => 55.0422, 'lng' => 59.0061,
            'image' => 'laguna.jpg',
        ]);
        $p9->images()->createMany([['path' => 'laguna_1.jpg'], ['path' => 'laguna_2.jpg'], ['path' => 'laguna_3.jpg']]);

        // --- 10. ИГНАТЬЕВСКАЯ ПЕЩЕРА ---
        $p10 = Place::create([
            'category_id' => $nature->id,
            'title' => 'Игнатьевская пещера',
            'description' => 'Пещера с палеолитическими рисунками. Одно из древнейших святилищ человека на территории России.',
            'address' => 'Катав-Ивановский район',
            'lat' => 54.8972, 'lng' => 57.7818,
            'image' => 'cave.jpg',
        ]);
        $p10->images()->createMany([['path' => 'cave_1.jpg'], ['path' => 'cave_2.jpg'], ['path' => 'cave_3.jpg']]);

        // --- 11. УСАДЬБА ДЕМИДОВЫХ ---
        $p11 = Place::create([
            'category_id' => $arch->id,
            'title' => 'Усадьба Демидовых',
            'description' => 'Архитектурный памятник классицизма — "Белый дом" в Кыштыме, центр горнозаводской империи Демидовых.',
            'address' => 'г. Кыштым',
            'lat' => 55.7029, 'lng' => 60.5487,
            'image' => 'kyshtym.jpg',
        ]);
        $p11->images()->createMany([['path' => 'kyshtym_1.jpg'], ['path' => 'kyshtym_2.jpg'], ['path' => 'kyshtym_3.jpg']]);

        $p12 = Place::create([
            'category_id' => $nature->id,
            'title' => 'Гора Ямантау',
            'description' => 'Самая высокая вершина Южного Урала. Название в переводе с башкирского означает «плохая гора». Находится на территории Южно-Уральского заповедника. Величественные курумники и суровая природа делают её одной из самых загадочных гор региона.',
            'address' => 'Белорецкий район',
            'lat' => 54.2547, 'lng' => 58.1011,
            'image' => 'yamantau.jpg',
        ]);
        $p11->images()->createMany([['path' => 'yamantau_1.jpg'], ['path' => 'yamantau_2.jpg'], ['path' => 'yamantau_3.jpg']]);
    }
}

