<?php

//P;/.Y
// Correr con el comando dentro de la carpeta del proyectoZ 
// php artisan db:seed --class=DatabaseSeeder
//
namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Pablo',
                'email' => 'pabloaldana.cipo@gmail.com',
                'password' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Percy',
                'email' => 'praa_nq@hotmail.com',
                'password' => bcrypt('123456'),
                'created_at' => now(),
                'updated_at' => now(),
            ] 
        ];

        DB::table('users')->insert($data);

        $data = [
            [
                'id' => 34,
                'nombre' => 'Historia', 
                'image' => 'public/images/areas/kxPAeu73wdRx1HiLFlYD1IJ1PFSwFO9fEQqlThLF.jpg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1
            ],
            [
                'id' => 35,
                'nombre' => 'Literatura', 
                'image' => 'public/images/areas/1UKwSVOfZAvHAC7dswL5LVgHMzOcVqrHsjeLyMWl.jpg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1
            ],
            [
                'id' => 36,
                'nombre' => 'Matemática', 
                'image' => 'public/images/areas/matematica.jpeg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 1
            ],
            [
                'id' => 38,
                'nombre' => 'Ciencias Naturales', 
                'image' => 'public/images/areas/5RTuv4r6oJQErE6Ggnt7TDkfjMp9nt2USv7o5lp1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 3
            ],
            [
                'id' => 42,
                'nombre' => 'Lengua', 
                'image' => 'public/images/areas/GUpHwUvQ3bxaeUyM8NykbUvLEq2TjGabziDb0Dbz.jpg',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 3
            ],
            [
                'id' => 43,
                'nombre' => 'Física', 
                'image' => 'public/images/areas/yuiYvgQUwpribZ1NgWaJegf2e2zrLpUM5yWxAKKO.png',
                'created_at' => now(),
                'updated_at' => now(),
                'user_id' => 3
            ]
        ];

        DB::table('areas')->insert($data);

        $data = [
            [
                'id' => 23,
                'titulo' => 'El Principito', 
                'texto' => '<p>
                <strong>El Principito</strong> es una historia maravillosa escrita por Antoine de Saint-Exupéry. Es un cuento que ha encantado a niños y adultos de todo el mundo desde que fue publicado en 1943. La historia es sobre un pequeño príncipe que vive en un pequeño planeta y sus aventuras por el universo.
                </p>
                <p>
                        La historia comienza con un aviador que está perdido en el desierto del Sahara después de que su avión se descompone. Mientras intenta repararlo, se encuentra con un pequeño niño, el Principito. El niño le pide que le dibuje una oveja. A pesar de la sorpresa del aviador, accede y así comienzan una serie de conversaciones entre ellos.
                </p>
                <p>
                        El Principito viene de un pequeño planeta llamado <strong>Asteroide B-612</strong>. Su planeta es tan pequeño que solo tiene tres volcanes (dos activos y uno inactivo) y una flor muy especial. La flor es hermosa, pero también muy vanidosa y exigente. El Principito se preocupa mucho por su flor, pero no siempre entiende sus sentimientos.
                </p>
                <p>
                        Un día, el Principito decide dejar su planeta y su flor para viajar y aprender sobre el universo. Visita varios planetas, cada uno habitado por un adulto con una característica particular. A través de sus encuentros, el Principito aprende valiosas lecciones sobre la vida y la naturaleza humana.
                </p>
                <p>
                        En el primer planeta, el Principito conoce a un rey que cree que todos le obedecen. El rey no tiene súbditos, pero insiste en que el Principito se quede para ser su súbdito. El Principito se da cuenta de que el rey no tiene verdadero poder y sigue su camino.
                </p>
                <p>
                        En el segundo planeta, el Principito conoce a un hombre vanidoso que solo quiere ser admirado. Este hombre está tan obsesionado con ser el mejor y más admirado que no escucha ni se interesa por nadie más. El Principito se da cuenta de que la vanidad es muy aburrida.
                </p>
                <p>
                        En el tercer planeta, el Principito se encuentra con un borracho que bebe para olvidar su vergüenza de beber. El Principito se siente triste por el hombre y no entiende su comportamiento. La adicción del borracho es un ciclo sin fin de tristeza.
                </p>
                <p>
                        En el cuarto planeta, el Principito conoce a un hombre de negocios que está tan ocupado contando estrellas que no tiene tiempo para disfrutar de la vida. Cree que posee las estrellas porque las cuenta. El Principito se da cuenta de lo absurdo de esta idea y sigue su viaje.
                </p>
                <p>
                        En el quinto planeta, el Principito encuentra a un farolero que enciende y apaga un farol cada minuto. Su planeta es tan pequeño que tiene que encender y apagar el farol constantemente. El Principito admira la dedicación del farolero, pero se da cuenta de que su trabajo no tiene mucho sentido.
                </p>
                <p>
                        En el sexto planeta, el Principito conoce a un geógrafo que solo se interesa en registrar información sobre los lugares, pero nunca los visita. El geógrafo le dice al Principito que su flor es efímera, lo que significa que no durará para siempre. Esto preocupa al Principito, y comienza a echar de menos a su flor.
                </p>
                <p>
                        Finalmente, el Principito llega a la Tierra. Aquí, conoce a un zorro que le pide que lo domestique. El zorro le enseña una importante lección sobre la amistad y el amor. Le dice que las cosas importantes son invisibles a los ojos y solo se ven bien con el corazón. A través de su amistad con el zorro, el Principito entiende que su flor es única y especial porque él la ha cuidado y amado.
                </p>
                <p>
                        En la Tierra, el Principito también se encuentra con varios otros personajes, como el guardagujas, que organiza los trenes que llevan a la gente de un lugar a otro, y el comerciante, que vende píldoras para calmar la sed. Cada encuentro le ofrece una nueva perspectiva sobre la vida y la naturaleza humana.
                </p>
                <p>
                        Mientras el Principito sigue explorando, el aviador continúa reparando su avión. Poco a poco, se convierte en amigo del Principito y aprende de sus historias y su sabiduría. El aviador se da cuenta de que las cosas simples y puras, como la risa de un niño o el amor por una flor, son lo que realmente importa en la vida.
                </p>
                <p>
                        Llega un momento en que el Principito quiere regresar a su planeta y a su flor. Encuentra una serpiente que puede ayudarle a regresar, pero esto significa que debe dejar su cuerpo atrás. El Principito no tiene miedo porque sabe que su espíritu volverá a su hogar. Se despide del aviador y le dice que mire las estrellas, porque él vivirá en una de ellas y siempre estará riendo.
                </p>
                <p>
                        El aviador termina su relato diciendo que nunca olvidará al Principito y siempre mirará al cielo esperando escuchar su risa. Nos deja con la reflexión de que lo más importante en la vida es invisible a los ojos y que siempre debemos mirar con el corazón.
                </p>
                <p>
                <strong>El Principito</strong> es una historia llena de enseñanzas y belleza. Nos habla sobre la importancia de la amistad, el amor, y de ver más allá de lo superficial. Nos enseña que debemos valorar las cosas pequeñas y simples de la vida, y que la verdadera esencia de las cosas es invisible a los ojos.
                </p>
                <p>
                        En su viaje, el Principito aprende sobre la naturaleza humana y nos invita a reflexionar sobre nuestras propias vidas. Cada personaje que conoce representa una faceta diferente de la sociedad y nos muestra que, a menudo, los adultos se olvidan de lo que realmente importa.
                </p>
                <p>
                        La historia del Principito es un recordatorio de que debemos cuidar de aquellos a quienes amamos, que la amistad es un tesoro invaluable y que debemos ver con el corazón. Es una invitación a mantener viva la curiosidad y la inocencia de la niñez, y a nunca perder la capacidad de maravillarnos con el mundo que nos rodea.
                </p>
                <p>
                        Así, el Principito nos deja con una sensación de ternura y una comprensión más profunda de lo que significa amar y ser amado. Nos muestra que, aunque el mundo puede ser complicado y lleno de desafíos, siempre hay belleza y bondad si sabemos dónde buscar.
                </p>
                <p>
                        En resumen, <strong>El Principito</strong> es un cuento encantador y lleno de sabiduría que sigue tocando los corazones de lectores de todas las edades. Nos enseña a valorar las relaciones, a ser responsables de lo que amamos, y a mirar más allá de lo que es visible. Es una historia que nos invita a redescubrir la maravilla de la vida a través de los ojos de un niño y a recordar que lo esencial es invisible a los ojos.
                </p>
                
                ',
                'grado' => 4,
                'user_id' => 1,
                'area_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ],
            [
                'id' => 25,
                'titulo' => 'El Quijote de la Mancha', 
                'texto' => '<p>
                <strong>Don Quijote de la Mancha</strong> es una novela escrita por Miguel de Cervantes hace muchos años. Es una historia muy famosa que cuenta las aventuras de un hombre llamado Don Quijote y su fiel amigo Sancho Panza.
                </p>
                <p>
                        Don Quijote vivía en un lugar de La Mancha, en España. Le gustaba mucho leer libros de caballería, que son historias sobre caballeros valientes que luchan contra dragones y salvan princesas. Don Quijote leía tanto que empezó a creer que él mismo era un caballero.
                </p>
                <p>
                        Un día, decidió convertirse en caballero andante, un caballero que viaja por el mundo buscando aventuras. Se puso una vieja armadura, tomó una lanza y un escudo, y montó a su caballo, al que llamó <strong>Rocinante</strong>. También eligió un nombre para sí mismo: Don Quijote de la Mancha.
                </p>
                <p>
                        Como todo caballero necesita una dama a quien dedicar sus hazañas, Don Quijote eligió a una campesina llamada Aldonza Lorenzo, pero él la llamó <strong>Dulcinea del Toboso</strong> y decidió que sería su amada.
                </p>
                <p>
                        Don Quijote salió en busca de aventuras, pero rápidamente se dio cuenta de que ser un caballero andante no era tan fácil como pensaba. En su primera salida, confundió una posada con un castillo y a los posaderos con nobles. Fue golpeado y regresó a casa muy lastimado.
                </p>
                <p>
                        A pesar de esto, no se desanimó y decidió intentarlo de nuevo. Esta vez, convenció a un vecino suyo, un hombre sencillo y gordito llamado <strong>Sancho Panza</strong>, para que fuera su escudero. Sancho aceptó porque Don Quijote le prometió que lo haría gobernador de una isla.
                </p>
                <p>
                        Juntos, Don Quijote y Sancho Panza vivieron muchas aventuras. Una de las más famosas es cuando Don Quijote vio unos molinos de viento y pensó que eran gigantes malvados. Cargó contra ellos con su lanza, pero los molinos lo derribaron. Sancho trató de explicarle que eran solo molinos de viento, pero Don Quijote insistió en que eran gigantes transformados por magia.
                </p>
                <p>
                        En otra ocasión, Don Quijote y Sancho encontraron un grupo de frailes y unas mujeres en un carruaje. Don Quijote pensó que los frailes eran malvados que llevaban a las mujeres prisioneras, así que los atacó para liberarlas. Por supuesto, estaba equivocado y causó muchos problemas.
                </p>
                <p>
                        A pesar de sus locuras, Don Quijote siempre trataba de hacer el bien. Creía firmemente en los ideales de la caballería: defender a los débiles, ayudar a los necesitados y luchar por la justicia.
                </p>
                <p>
                        Sancho Panza, aunque no entendía del todo las fantasías de su amo, se mantuvo a su lado. A veces, Sancho intentaba convencer a Don Quijote de que estaba equivocado, pero otras veces, se dejaba llevar por las aventuras y sueños de su señor.
                </p>
                <p>
                        En un momento, Don Quijote y Sancho Panza encontraron un grupo de actores que viajaban con una obra de teatro. Don Quijote pensó que eran enemigos y los atacó, causando un gran alboroto. Los actores huyeron asustados, y Sancho tuvo que disculparse por su amo.
                </p>
                <p>
                        Las aventuras continuaron, y en muchas de ellas, Don Quijote acababa herido o en problemas, pero nunca perdió su espíritu caballeresco. Siempre estaba dispuesto a luchar por lo que creía justo, aunque su visión de la realidad estuviera distorsionada.
                </p>
                <p>
                        Finalmente, después de muchas aventuras, amigos de Don Quijote, preocupados por su salud mental, idearon un plan para llevarlo de vuelta a casa. Fingiéndose caballeros y utilizando la imaginación del propio Don Quijote, lograron que regresara a su aldea.
                </p>
                <p>
                        De vuelta en casa, Don Quijote enfermó gravemente. En su lecho de muerte, recobró la cordura y se dio cuenta de que sus aventuras habían sido producto de su imaginación. Lamentó sus errores, pero fue perdonado por sus amigos y familiares.
                </p>
                <p>
                        Don Quijote murió rodeado de sus seres queridos, y aunque sus aventuras habían sido locas y a veces peligrosas, dejó una huella imborrable en todos ellos. Su espíritu valiente y su deseo de hacer el bien lo convirtieron en un personaje inolvidable.
                </p>
                <p>
                        La historia de Don Quijote nos enseña la importancia de los sueños y la imaginación, pero también nos recuerda la necesidad de mantener los pies en la tierra. Don Quijote es un héroe porque, a pesar de sus errores, siempre quiso ayudar a los demás y luchar por la justicia.
                </p>
                <p>
                        Así termina la historia de Don Quijote de la Mancha, un hombre que vivió entre la realidad y la fantasía, y cuyo espíritu caballeresco seguirá inspirando a generaciones futuras.
                </p>',
                'grado' => 5,
                'user_id' => 3,
                'area_id' => 35,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ],
            [
                'id' => 26,
                'titulo' => 'El Principio de Arquímides', 
                'texto' => '<p>Hace mucho, mucho tiempo, vivía un hombre muy inteligente llamado Arquímedes. Arquímedes vivía en una ciudad llamada Siracusa, en la antigua Grecia. Era un gran matemático y científico, y le gustaba mucho pensar en cómo funcionan las cosas.</p>
        
                <br><b><h2>El Problema del Rey</b></h2>
                <p>Un día, el rey de Siracusa le pidió a Arquímedes que resolviera un gran problema. El rey había recibido una nueva corona de oro y quería saber si realmente estaba hecha de oro puro. Sospechaba que el joyero había mezclado otros metales más baratos con el oro.</p>
                        
                        
                <br><b><h2>El Baño de Arquímedes</b></h2>
                <p>Arquímedes pensó y pensó en cómo resolver el problema. Un día, mientras se daba un baño, notó algo interesante. Cuando se metió en la bañera, el nivel del agua subió. Al salir del agua, el nivel bajó. ¡Esto le dio una idea genial!</p>
                        
                <br><b><h2>La Gran Idea de Arquímedes</b></h2>
                <p>Arquímedes se dio cuenta de que su cuerpo desplazaba el agua de la bañera. Cuanto más grande era el objeto que se metía en el agua, más agua se desplazaba. Esto le hizo pensar que podría usar esta idea para averiguar si la corona del rey estaba hecha de oro puro.</p>
                        
                
                        
                <br><b><h2>El Principio de Arquímedes</b></h2>
                <p>Arquímedes descubrió lo que ahora llamamos el "Principio de Arquímedes". Este principio dice que cualquier objeto que se sumerge en un líquido es empujado hacia arriba con una fuerza igual al peso del líquido que desplaza. En otras palabras, si pones algo en el agua, el agua empuja hacia arriba ese objeto con una fuerza igual al peso del agua que fue movida.</p>
                        
                <br><b><h2>El Experimento de Arquímedes</b></h2>
                <p>Arquímedes decidió hacer un experimento. Primero, tomó una pieza de oro puro del mismo peso que la corona del rey. Luego, sumergió la pieza de oro en agua y midió cuánto agua se desplazó. Después, hizo lo mismo con la corona. Si la corona desplazaba la misma cantidad de agua que la pieza de oro, significaba que la corona era de oro puro. Pero si la corona desplazaba más agua, significaba que estaba hecha de otros metales.</p>
                        
                
                        
                <br><b><h2>El Resultado</b></h2>
                <p>El resultado del experimento de Arquímedes fue sorprendente. Descubrió que la corona desplazaba más agua que la pieza de oro puro. Esto significaba que la corona no estaba hecha de oro puro, y que el joyero había engañado al rey. ¡El rey quedó muy impresionado con la inteligencia de Arquímedes!</p>
                        
                <br><b><h2>La Importancia del Principio de Arquímedes</b></h2>
                <p>El descubrimiento de Arquímedes es muy importante porque nos ayuda a entender cómo y por qué los objetos flotan o se hunden. Por ejemplo, los barcos pueden flotar en el agua porque están diseñados para desplazar una gran cantidad de agua, lo que crea una fuerza hacia arriba que los mantiene a flote.</p>
                        
                
                        
                <br><b><h2>Experimenta Tú Mismo</b></h2>
                <p>Tú también puedes experimentar con el principio de Arquímedes. Llena un recipiente con agua y consigue algunos objetos de diferentes tamaños y pesos. Coloca los objetos en el agua y observa lo que sucede. ¿Flotan o se hunden? ¿Cuánto agua desplazan? ¡Es una manera divertida de aprender más sobre la ciencia!</p>
                        
                <p>El principio de Arquímedes nos enseña que la ciencia está en todas partes, incluso en cosas tan simples como tomar un baño. Al observar y hacer preguntas, podemos descubrir cosas increíbles sobre el mundo que nos rodea.</p>
                        
                       
                <br><b><h2>Conclusión</b></h2>
                <p>El principio de Arquímedes es una idea maravillosa que nos ayuda a entender por qué los objetos flotan o se hunden en el agua. Gracias a la curiosidad y la inteligencia de Arquímedes, ahora sabemos que un objeto en un líquido es empujado hacia arriba con una fuerza igual al peso del líquido que desplaza.</p>
                        
                <p>Así que, la próxima vez que estés en el baño o jugando en la piscina, recuerda a Arquímedes y su famoso descubrimiento. ¡Quién sabe qué otras grandes ideas podrías tener tú también!</p>
                        
                <p>¡Espero que hayas disfrutado aprendiendo sobre el principio de Arquímedes y que sigas explorando el maravilloso mundo de la ciencia!</p>',
                'grado' => 4,
                'user_id' => 3,
                'area_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ],
            [
                'id' => 27,
                'titulo' => 'El Decubrimiento de America', 
                'texto' => '<p>
                Hace mucho tiempo, en el año 1492, un hombre llamado Cristóbal Colón hizo un viaje muy importante que cambió el mundo. Esta es la historia de cómo Colón descubrió América y qué pasó después.
               </p>
               <p>
                En el siglo XV, la gente de Europa no sabía mucho sobre otras partes del mundo. Creían que el mundo era mucho más pequeño de lo que realmente es y no conocían la existencia de los continentes de América. En ese tiempo, los europeos querían encontrar nuevas rutas para comerciar con Asia, porque Asia tenía muchas cosas valiosas como especias, seda y joyas.
               </p>
               <p>
                Cristóbal Colón era un navegante italiano que tenía una idea muy audaz. Pensaba que podía llegar a Asia navegando hacia el oeste, atravesando el océano Atlántico. La mayoría de las personas en ese tiempo pensaban que esto era imposible porque creían que el océano era demasiado grande y que no había tierra entre Europa y Asia.
               </p>
               <p>
                Colón necesitaba dinero para su viaje, así que fue a varios reyes y reinas de Europa para pedir su apoyo. Finalmente, los Reyes Católicos de España, Isabel y Fernando, aceptaron ayudarlo. Le dieron tres barcos pequeños: la Niña, la Pinta y la Santa María, y un equipo de marineros.
               </p>
               <p>
                El 3 de agosto de 1492, Colón y su tripulación zarparon del puerto de Palos, en España. Navegaron durante más de dos meses a través del océano Atlántico. Los marineros comenzaron a preocuparse porque no veían tierra y temían que se hubieran perdido. Colón les aseguró que estaban en el camino correcto.
               </p>
               <p>
                Finalmente, el 12 de octubre de 1492, un marinero llamado Rodrigo de Triana, que estaba en la Pinta, vio tierra. Habían llegado a una isla en lo que hoy conocemos como las Bahamas. Colón pensó que había llegado a las Indias Orientales, que es como los europeos llamaban a Asia, por eso llamó a los habitantes de las islas "indios".
               </p>
               <p>
                Colón y su tripulación exploraron varias islas del Caribe, incluyendo Cuba y la isla que llamó La Española (hoy Haití y República Dominicana). Se encontraron con los pueblos indígenas que vivían allí, quienes los recibieron con curiosidad y hospitalidad. Colón se maravilló por las riquezas naturales y la belleza del lugar.
               </p>
               <p>
                Después de explorar durante unos meses, Colón decidió regresar a España para contarles a los Reyes Católicos sobre su descubrimiento. Dejó algunos de sus hombres en La Española y se llevó consigo muestras de oro, plantas y animales desconocidos en Europa. También llevó algunos nativos para mostrárselos a los reyes.
               </p>
               <p>
                Colón fue recibido como un héroe en España. Los Reyes Católicos estaban muy contentos con su éxito y decidieron apoyarlo en otros viajes. Colón realizó tres viajes más a América, explorando más islas del Caribe y partes de América Central y del Sur. Sin embargo, nunca se dio cuenta de que había descubierto un continente nuevo; siempre pensó que había llegado a Asia.
               </p>
               <p>
                A medida que otros exploradores europeos comenzaron a viajar al Nuevo Mundo, se dieron cuenta de que América era un continente completamente nuevo y diferente de Asia. Uno de estos exploradores, un italiano llamado Américo Vespucio, fue el primero en sugerir que estas tierras eran un "Nuevo Mundo". Por esta razón, el continente fue llamado América en su honor.
               </p>
               <p>
                El descubrimiento de América tuvo enormes consecuencias. Los europeos comenzaron a explorar y colonizar estas nuevas tierras, buscando riquezas y oportunidades. Trajeron con ellos sus costumbres, su idioma y su religión, cambiando para siempre la vida de los pueblos indígenas que ya vivían allí.
               </p>
               <p>
                Las expediciones europeas trajeron muchos cambios a América. Algunos de estos cambios fueron buenos, como el intercambio de alimentos, animales y plantas entre los dos continentes. Por ejemplo, los europeos llevaron a América animales como caballos, vacas y ovejas, así como cultivos como trigo y caña de azúcar. A su vez, llevaron a Europa productos americanos como el maíz, las papas, los tomates y el cacao.
               </p>
               <p>
                Sin embargo, también hubo muchos aspectos negativos. Los europeos trajeron enfermedades como la viruela, el sarampión y la gripe, que resultaron devastadoras para los pueblos indígenas, quienes no tenían inmunidad contra ellas. Millones de indígenas murieron a causa de estas enfermedades.
               </p>
               <p>
                Además, los europeos a menudo trataron a los indígenas de manera muy cruel. Conquistaron sus tierras y los obligaron a trabajar en condiciones muy duras. Muchos indígenas fueron esclavizados y otros murieron en guerras y conflictos con los colonizadores.
               </p>
               <p>
                A pesar de estos aspectos trágicos, el descubrimiento de América también llevó a una mezcla de culturas. Las culturas europea e indígena se influenciaron mutuamente, creando nuevas formas de vida, arte, música y cocina. Esta mezcla cultural es una parte importante de la historia de América y sigue siendo evidente hoy en día.
               </p>
               <p>
                Con el tiempo, más y más europeos llegaron a América. Exploraron y establecieron colonias en toda América del Norte, Central y del Sur. Las potencias europeas como España, Portugal, Inglaterra, Francia y Holanda se convirtieron en los principales colonizadores del Nuevo Mundo.
               </p>
               <p>
                En Norteamérica, los ingleses establecieron las trece colonias que más tarde se convertirían en los Estados Unidos. Los franceses se establecieron en Canadá y en la región que hoy conocemos como Luisiana. Los españoles colonizaron gran parte de América del Sur, América Central y partes de América del Norte, incluyendo México, Florida y California. Los portugueses se establecieron en Brasil.
               </p>
               <p>
                Estas colonias crecieron y se desarrollaron con el tiempo, y algunas eventualmente lucharon por su independencia de los países europeos. Los Estados Unidos, por ejemplo, se independizaron de Inglaterra en 1776. Muchos países de América Latina lograron su independencia de España y Portugal en el siglo XIX.
               </p>
               <p>
                La historia del descubrimiento de América es una historia de exploración y aventura, pero también de conflicto y cambio. Nos muestra cómo el mundo puede transformarse rápidamente con el intercambio de ideas, personas y culturas.
               </p>
               <p>
                Hoy en día, América es un continente lleno de diversidad. Hay una gran mezcla de culturas, idiomas y tradiciones, resultado de siglos de historia compartida. Esta diversidad es una de las mayores riquezas de América.
               </p>
               <p>
                Es importante recordar que, antes de la llegada de los europeos, América ya estaba habitada por muchos pueblos indígenas con sus propias culturas y formas de vida. Aunque la llegada de los europeos cambió drásticamente sus vidas, sus culturas y tradiciones siguen vivas hoy en día y son una parte fundamental de la identidad americana.
               </p>
               <p>
                Al aprender sobre el descubrimiento de América, también aprendemos sobre la importancia de la exploración, la curiosidad y el deseo de conocer lo desconocido. Cristóbal Colón y otros exploradores se atrevieron a soñar con lo que había más allá del horizonte, y aunque no siempre entendieron completamente lo que encontraron, su valentía y determinación cambiaron el mundo para siempre.
               </p>
               <p>
                La historia del descubrimiento de América nos enseña que el mundo es un lugar grande y diverso, lleno de maravillas por descubrir. Nos recuerda que, aunque somos diferentes en muchos aspectos, todos compartimos este planeta y nuestra historia está entrelazada.
               </p>
               <p>
                Así que, la próxima vez que mires un mapa del mundo, piensa en los viajes de aquellos valientes exploradores que se aventuraron hacia lo desconocido. Piensa en los pueblos indígenas que ya vivían en estas tierras y en cómo sus vidas se vieron afectadas. Y recuerda que la historia de América es una historia de descubrimiento, cambio y diversidad.
               </p>',
                'grado' => 3,
                'user_id' => 3,
                'area_id' => 34,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ],
            [
                'id' => 28,
                'titulo' => 'La Evolucion del Hombre', 
                'texto' => '<p>
                Hace muchísimo tiempo, antes de que existieran las ciudades, los coches y los juguetes, los humanos no eran como somos ahora. Esta es la historia de cómo los humanos cambiaron y se convirtieron en lo que somos hoy.
                </p>
                <p>
                Al principio, hace millones de años, no había humanos en la Tierra. Los primeros seres que se parecían un poquito a nosotros se llaman <strong>primates</strong>. Los primates son como nuestros primos muy, muy lejanos. Algunos ejemplos de primates que aún existen son los monos y los chimpancés.
                </p>
                <p>
                Con el tiempo, algunos primates empezaron a caminar en dos patas. Esto era algo muy especial porque les permitía ver más lejos y usar sus manos para hacer cosas. A estos primeros caminantes en dos patas los llamamos <strong>australopitecos</strong>. Vivieron hace unos 4 millones de años.
                </p>
                <p>a
                Los australopitecos eran más pequeños que nosotros y no sabían hacer muchas cosas que ahora hacemos. Pero gracias a que caminaban en dos patas, podían usar sus manos para recoger frutas, construir refugios y defenderse.
                </p>
                <p>
                Pasaron muchos, muchos años y los australopitecos evolucionaron. Se convirtieron en un ser que llamamos <strong>Homo habilis</strong>. Este nombre significa "hombre hábil" porque ellos empezaron a usar herramientas simples hechas de piedra. Podían cortar carne y romper nueces, lo que les ayudó a sobrevivir mejor.
                </p>
                <p>
                Luego, apareció otro ser llamado <strong>Homo erectus</strong>. Esto fue hace unos 1.8 millones de años. El Homo erectus era más alto y fuerte que el Homo habilis y podía caminar largas distancias. Ellos aprendieron a usar el fuego. ¡Imagínate lo importante que fue eso! El fuego les daba calor, luz y les ayudaba a cocinar los alimentos.
                </p>
                <p>
                Después, llegó un grupo llamado <strong>Homo neanderthalensis</strong>, o neandertales. Ellos vivieron hace unos 400,000 años. Los neandertales eran muy fuertes y estaban bien adaptados al frío porque vivieron durante la era de hielo. Usaban ropa hecha de pieles de animales y vivían en cuevas para protegerse del frío.
                </p>
                <p>
                Mientras tanto, en otro lugar del mundo, comenzó a aparecer una nueva especie llamada <strong>Homo sapiens</strong>. Nosotros somos Homo sapiens. Aparecimos hace unos 200,000 años en África. Los Homo sapiens eran muy inteligentes. Podían hablar entre ellos, crear herramientas muy avanzadas y hacer arte, como pinturas en las paredes de las cuevas.
                </p>
                <p>
                Los Homo sapiens empezaron a viajar a otros lugares del mundo. Salieron de África y llegaron a Asia, Europa y América. Durante este tiempo, se encontraron con los neandertales. A veces vivían juntos y compartían ideas y técnicas.
                </p>
                <p>
                Los Homo sapiens siguieron evolucionando y aprendiendo. Descubrieron cómo plantar semillas y cultivar alimentos. Esto fue hace unos 10,000 años y es lo que llamamos la <strong>revolución agrícola</strong>. Antes, los humanos eran nómadas, lo que significa que se movían de un lugar a otro buscando comida. Pero con la agricultura, pudieron quedarse en un solo lugar, construir aldeas y ciudades.
                </p>
                <p>
                Al tener más alimentos gracias a la agricultura, las personas tuvieron más tiempo para pensar y crear cosas nuevas. Inventaron la rueda, aprendieron a trabajar con metales como el cobre y el hierro, y empezaron a construir barcos para navegar por los ríos y mares.
                </p>
                <p>
                Con el tiempo, los humanos crearon grandes civilizaciones como Egipto, Mesopotamia, Grecia y Roma. Estas civilizaciones construyeron enormes pirámides, templos y ciudades. Inventaron la escritura para poder registrar sus historias y conocimientos.
                </p>
                <p>
                La escritura permitió que las personas compartieran ideas a lo largo del tiempo y del espacio. Gracias a esto, el conocimiento se acumulaba y pasaba de generación en generación, haciendo que la humanidad avanzara aún más rápido.
                </p>
                <p>
                Después de las grandes civilizaciones antiguas, llegaron los tiempos medievales. En esta época, los castillos y caballeros eran muy comunes. También fue un tiempo de muchos descubrimientos y avances en la ciencia y la tecnología.
                </p>
                <p>
                Luego, vino la <strong>Edad Moderna</strong>. Este fue un tiempo emocionante porque los humanos empezaron a explorar todo el mundo. Cristóbal Colón llegó a América, y otros exploradores navegaron alrededor del mundo. Fue una época de grandes descubrimientos.
                </p>
                <p>
                En los últimos 500 años, la humanidad ha hecho avances increíbles. Inventamos la máquina de vapor, que ayudó a impulsar la Revolución Industrial. Esta revolución cambió el mundo porque permitió la creación de fábricas y la producción en masa de bienes. Las personas se mudaron a las ciudades en busca de trabajo y nuevas oportunidades.
                </p>
                <p>
                En el siglo XX, los humanos lograron cosas asombrosas. Inventamos el avión, el automóvil, y las computadoras. En 1969, los humanos llegaron a la Luna por primera vez. Esto fue un momento muy importante en nuestra historia.
                </p>
                <p>
                Hoy en día, seguimos avanzando y aprendiendo. Gracias a la ciencia y la tecnología, hemos mejorado nuestra calidad de vida. Podemos comunicarnos con personas en todo el mundo al instante, viajar a diferentes países en pocas horas y curar enfermedades que antes eran mortales.
                </p>
                <p>
                La historia de la evolución del hombre es una historia de constante cambio y adaptación. Desde los primeros primates que comenzaron a caminar en dos patas, hasta los humanos modernos que exploran el espacio, hemos recorrido un largo camino.
                </p>
                <p>
                Lo más importante de esta historia es recordar que todos los humanos compartimos un origen común. Todos venimos de los mismos antepasados y hemos evolucionado juntos. Esto significa que, sin importar de dónde venimos o cómo lucimos, todos somos parte de la gran familia humana.
                </p>
                <p>
                La evolución también nos enseña que el cambio es una parte natural de la vida. A lo largo de millones de años, hemos aprendido a adaptarnos a nuestro entorno y a mejorar nuestras habilidades. Esta capacidad de adaptarnos y aprender es lo que nos ha permitido sobrevivir y prosperar.
                </p>
                <p>
                Así que, la próxima vez que mires a tu alrededor, piensa en todo el tiempo y los cambios que han tenido que pasar para que estemos aquí hoy. Piensa en los primeros primates, en los Homo habilis con sus herramientas de piedra, en los Homo erectus que aprendieron a usar el fuego, en los neandertales que vivieron en la era de hielo, y en los Homo sapiens que empezaron a crear arte y cultura.
                </p>
                <p>
                Cada uno de estos pasos fue importante y nos ha llevado a donde estamos ahora. Y aunque hemos cambiado mucho desde esos primeros días, una cosa sigue siendo igual: la curiosidad y el deseo de aprender y explorar. Es eso lo que nos hace humanos.
                </p>
                <p>
                La historia de la evolución del hombre es una aventura increíble que nos muestra de dónde venimos y nos da pistas sobre hacia dónde vamos. Así que sigue siendo curioso, sigue aprendiendo y, quién sabe, tal vez un día tú también hagas un descubrimiento que cambie el mundo.
                </p>',
                'grado' => 2,
                'user_id' => 3,
                'area_id' => 34,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ],
            [
                'id' => 30,
                'titulo' => 'Lengua para Segundo', 
                'texto' => '<h2>1. El Abecedario</h2> <p> El abecedario es el conjunto de letras que usamos para escribir palabras en español. Tiene 27 letras:
                </p> <ul> 
                <li>A, B, C, D, E, F, G, H, I, J, K, L, M, N, Ñ, O, P, Q, R, S, T, U, V, W, X, Y, Z</li>
                </ul>
                <p>Con estas letras podemos formar palabras, frases y oraciones. Es importante conocerlas y saber cómo se usan.
                </p>
                <h2>2. Las Vocales y Consonantes</h2>
                <p>Las letras del abecedario se dividen en dos grupos: las vocales y las consonantes.
                </p>
                <ul>
                <li>Vocales: A, E, I, O, U</li>
                <li>Consonantes: Todas las demás letras (B, C, D, F, G, H, J, K, L, M, N, Ñ, P, Q, R, S, T, V, W, X, Y, Z)</li>
                </ul>
                <p>Las vocales son muy importantes porque se usan en casi todas las palabras. Las consonantes se combinan con las vocales para formar las palabras.
                </p>
                <h2>3. Palabras y Sílabas</h2>
                <p>Las palabras están formadas por sílabas. Una sílaba es un grupo de letras que se pronuncian juntas en un solo golpe de voz. Por ejemplo, la palabra "casa" tiene dos sílabas: "ca" y "sa".
                </p>
                <p>
                 Podemos separar las palabras en sílabas para aprender a leerlas mejor. Aquí tienes algunos ejemplos:
                </p>
                <ul>
                <li>Sol: sol (1 sílaba)</li>
                <li>Perro: pe-rro (2 sílabas)</li>
                <li>Elefante: e-le-fan-te (4 sílabas)</li>
                </ul>
                <h2>4. Las Palabras Agudas, Llanas y Esdrújulas</h2>
                <p>
                 Dependiendo de dónde se encuentra la sílaba tónica (la sílaba que se pronuncia con más fuerza), las palabras se pueden clasificar en agudas, llanas y esdrújulas.
                </p>
                <ul>
                <li><strong>Palabras agudas:</strong> La sílaba tónica está en la última sílaba. Ejemplo: "camión".</li>
                <li><strong>Palabras llanas:</strong> La sílaba tónica está en la penúltima sílaba. Ejemplo: "casa".</li>
                <li><strong>Palabras esdrújulas:</strong> La sílaba tónica está en la antepenúltima sílaba. Ejemplo: "teléfono".</li>
                </ul>
                <h2>5. Los Sustantivos</h2>
                <p>
                 Los sustantivos son palabras que usamos para nombrar personas, animales, cosas, lugares o ideas. Pueden ser de dos tipos:
                </p>
                <ul>
                <li><strong>Sustantivos propios:</strong> Nombres específicos que se escriben con mayúscula. Ejemplo: "María", "Madrid".</li>
                <li><strong>Sustantivos comunes:</strong> Nombres generales. Ejemplo: "niño", "ciudad".</li>
                </ul>
                
                <h2>6. Los Adjetivos</h2>
                <p>
                 Los adjetivos son palabras que usamos para describir a los sustantivos. Nos dicen cómo es algo o alguien. Por ejemplo:
                </p>
                <ul>
                <li>Niño <strong>alto</strong></li>
                <li>Casa <strong>grande</strong></li>
                <li>Perro <strong>feliz</strong></li>
                </ul>
                
                <h2>7. Los Verbos</h2>
                <p>
                 Los verbos son palabras que indican acciones, estados o procesos. Los verbos nos dicen lo que alguien hace o lo que sucede. Por ejemplo:
                </p>
                <ul>
                <li>Correr</li>
                <li>Saltar</li>
                <li>Leer</li>
                <li>Estar</li>
                </ul>
                <p>
                 Los verbos pueden cambiar según el tiempo en el que ocurren las acciones. Pueden estar en presente, pasado o futuro. Por ejemplo:
                </p>
                <ul>
                <li>Presente: Yo <strong>corro</strong>.</li>
                <li>Pasado: Yo <strong>corrí</strong>.</li>
                <li>Futuro: Yo <strong>correré</strong>.</li>
                </ul>
                <h2>8. La Oración</h2>
                <p>
                 Una oración es un conjunto de palabras que expresan una idea completa. Toda oración debe tener al menos un sujeto (de quién o de qué se habla) y un predicado (lo que se dice del sujeto). Por ejemplo:
                </p>
                <ul>
                <li>El <strong>gato</strong> (sujeto) <strong>duerme</strong> (predicado).</li>
                <li>Mi <strong>amiga</strong> (sujeto) <strong>juega</strong> (predicado).</li>
                </ul>
                
                <h2>9. Signos de Puntuación</h2>
                <p>
                 Los signos de puntuación nos ayudan a entender mejor lo que leemos y escribimos. Aquí tienes algunos de los más importantes:
                </p>
                <ul>
                <li><strong>Punto (.)</strong>: Se usa al final de una oración. Ejemplo: "El perro ladra."</li>
                <li><strong>Coma (,)</strong>: Se usa para separar elementos en una lista o hacer una pausa en una oración. Ejemplo: "Tengo un lápiz, un cuaderno y una regla."</li>
                <li><strong>Signo de interrogación (¿?)</strong>: Se usa para hacer preguntas. Ejemplo: "¿Cómo te llamas?"</li>
                <li><strong>Signo de exclamación (¡!)</strong>: Se usa para expresar sorpresa o emoción. Ejemplo: "¡Qué bonito es tu dibujo!"</li>
                </ul>
                <h2>10. La Lectura</h2>
                <p>
                 La lectura es una habilidad muy importante. Leer nos permite aprender cosas nuevas, disfrutar de historias y mejorar nuestro vocabulario. Aquí tienes algunos consejos para ser un buen lector:
                </p>
                <ul>
                <li>Lee despacio y con atención para entender mejor lo que lees.</li>
                <li>Si encuentras una palabra que no conoces, búscala en el diccionario.</li>
                <li>Haz preguntas sobre lo que lees para asegurarte de que lo entiendes.</li>
                <li>Lee todos los días, aunque sea solo un poquito.</li>
                </ul>
                
                <h2>11. La Escritura</h2>
                <p>
                 La escritura es otra habilidad esencial. Escribir bien nos ayuda a comunicarnos claramente con los demás. Aquí tienes algunos consejos para mejorar tu escritura:
                </p>
                <ul>a
                <li>Escribe sobre cosas que te interesen o te gusten.</li>
                <li>Usa puntos y comas para que tus oraciones sean claras y fáciles de entender.</li>
                <li>Revisa tu escritura para corregir errores de ortografía y gramática.</li>
                <li>Practica escribiendo todos los días, aunque sean solo unas pocas líneas.</li>
                </ul>
                
                <h2>12. El Cuento</h2>
                <p>
                 Un cuento es una historia corta que tiene un principio, un desarrollo y un final. Los cuentos pueden ser sobre cualquier cosa: animales, personas, lugares mágicos, etc. Aquí tienes algunos elementos de un cuento:
                </p>
                <ul>
                <li><strong>Personajes:</strong> Las personas o animales que aparecen en la historia.</li>
                <li><strong>Escenario:</strong> El lugar donde ocurre la historia.</li>
                <li><strong>Problema:</strong> Algo que los personajes tienen que resolver.</li>
                <li><strong>Solución:</strong> Cómo se resuelve el problema.</li>
                </ul>
                <p>
                 ¡Y eso es todo por hoy! Espero que hayas disfrutado aprendiendo sobre la lengua. Recuerda practicar leyendo y escribiendo todos los días para mejorar tus habilidades. ¡Hasta la próxima!
                </p>
                ',
                'grado' => 2,
                'user_id' => 3,
                'area_id' => 42,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ],
            [
                'id' => 31,
                'titulo' => 'El ciclo del Agua', 
                'texto' => '<p>Hola, amigo. Hoy vamos a aprender sobre algo muy importante para todos nosotros: el ciclo del agua. El agua es muy especial y está en todas partes. En los ríos, en los lagos, en los océanos, en las nubes, y también en el suelo. Pero, ¿sabes qué? El agua no se queda en un solo lugar. ¡Viaja por todo el mundo en un ciclo sin fin!</p>
    
                <h2>La Evaporación</h2>
                <p>Todo comienza con el sol. El sol es muy fuerte y calienta el agua en los océanos, lagos y ríos. Cuando el agua se calienta, se convierte en vapor de agua. Esto se llama evaporación. El vapor de agua es como un gas invisible que sube al cielo. Es como si el agua se convirtiera en un fantasma y desapareciera en el aire.</p>
                
                <h2>La Condensación</h2>
                <p>Cuando el vapor de agua sube, se encuentra con el aire frío en el cielo. ¿Qué pasa cuando el vapor de agua se enfría? Se convierte en gotas de agua otra vez. Esto se llama condensación. Las gotas de agua se juntan para formar las nubes. Así que, cuando ves nubes en el cielo, estás viendo muchas, muchas gotas de agua juntas.</p>
                
                <h2>La Precipitación</h2>
                <p>Las nubes siguen viajando por el cielo, pero cuando se llenan mucho de gotas de agua, ya no pueden sostenerlas más. Entonces, las gotas de agua caen al suelo. Esto se llama precipitación. La precipitación puede ser de diferentes formas. Puede ser lluvia, nieve, granizo o aguanieve, dependiendo de la temperatura. ¡Es como si las nubes estuvieran soltando todos sus tesoros!</p>
                
                <h2>La Recogida</h2>
                <p>Cuando el agua cae al suelo, tiene que ir a algún lugar. Parte del agua se absorbe en el suelo y alimenta a las plantas y los árboles. Otra parte del agua corre por el suelo y forma arroyos y ríos que llevan el agua de vuelta a los océanos y lagos. Esto se llama recogida. Es como si el agua estuviera viajando por un tobogán muy largo hasta llegar a su hogar.</p>
                
                <h2>El Ciclo Comienza de Nuevo</h2>
                <p>Y así, el ciclo del agua comienza de nuevo. El sol calienta el agua, el agua se convierte en vapor, el vapor se convierte en nubes, las nubes sueltan el agua y el agua vuelve al suelo y a los océanos. Este ciclo no se detiene nunca y es muy importante para la vida en la Tierra. Sin el ciclo del agua, las plantas no podrían crecer, los animales no tendrían agua para beber, y nosotros tampoco podríamos vivir.</p>
                
                <h2>¿Por Qué es Importante el Ciclo del Agua?</h2>
                <p>El ciclo del agua es importante porque mantiene nuestro planeta limpio y saludable. Ayuda a que las plantas crezcan y nos da agua para beber, cocinar y bañarnos. También ayuda a mantener el clima de la Tierra, asegurando que no haga demasiado calor ni demasiado frío. ¡El agua es realmente increíble!</p>
                
                <h2>Cosas Divertidas que Puedes Hacer</h2>
                <p>Hay muchas maneras divertidas de aprender sobre el ciclo del agua. Puedes hacer un dibujo del ciclo del agua, mostrando cómo el agua se evapora, se convierte en nubes, cae como lluvia y vuelve a los océanos. También puedes hacer experimentos en casa, como dejar un vaso de agua al sol y ver cómo el agua desaparece poco a poco. ¡Es la evaporación en acción!</p>
                
                <h2>Un Experimento Sencillo</h2>
                <p>Aquí tienes un experimento que puedes hacer con la ayuda de un adulto. Necesitarás un frasco de vidrio, un poco de agua caliente y un plato. Llena el frasco con agua caliente y cubre el frasco con el plato. Luego, pon algunos cubitos de hielo en el plato. Espera unos minutos y verás cómo se forman gotitas de agua dentro del frasco. Esto es la condensación, como las nubes en el cielo.</p>
            <h2>Conclusión</h2>
                <p>El ciclo del agua es un proceso increíble que mantiene nuestro planeta funcionando. Es como una gran rueda que nunca se detiene. El agua viaja por todo el mundo y vuelve para empezar de nuevo. Gracias al ciclo del agua, tenemos agua para beber, plantas que crecen y un clima agradable. Ahora que sabes más sobre el ciclo del agua, ¡puedes compartirlo con tus amigos y familiares!</p>
                
                <p>Recuerda, el agua es muy importante, así que debemos cuidarla y no desperdiciarla. Cada gota cuenta. ¡Gracias por aprender sobre el ciclo del agua!</p>',
                'grado' => 1,
                'user_id' => 3,
                'area_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ],
            [
                'id' => 32,
                'titulo' => '¿Para qué nos sirve la división matemática?', 
                'texto' => '<p>¡Hola, amiguito! Hoy vamos a hablar sobre algo muy interesante en matemáticas: la división. La división es una operación matemática muy importante y divertida. Nos ayuda a repartir cosas de manera justa y a entender mejor el mundo que nos rodea. ¿Quieres saber más? ¡Vamos a descubrirlo juntos!</p>

                <h2>¿Qué es la división?</h2>
                <p>La división es como repartir algo entre varias personas o partes. Por ejemplo, imagina que tienes 12 galletas y quieres compartirlas con 4 amigos. ¿Cuántas galletas le tocarían a cada amigo? Para saberlo, usamos la división. Dividimos 12 galletas entre 4 amigos, y así sabremos que cada uno recibe 3 galletas.</p>
                
                <h2>¿Por qué es importante la división?</h2>
                <p>La división es muy importante porque nos ayuda a resolver problemas en la vida diaria. Aquí te doy algunos ejemplos de cómo usamos la división:</p>
                
                <h3>1. Repartir cosas</h3>
                <p>Imagina que estás en una fiesta de cumpleaños y hay 20 globos para 5 niños. Si quieres repartir los globos de manera justa, puedes usar la división. Divides 20 globos entre 5 niños, y cada niño recibirá 4 globos. Así, todos estarán contentos.</p>
                
                <h3>2. Cocinar</h3>
                <p>La división también es útil en la cocina. Si tienes una receta que sirve para 6 personas, pero solo necesitas cocinar para 3 personas, puedes dividir los ingredientes a la mitad. Por ejemplo, si la receta dice que necesitas 6 tazas de harina, puedes dividir 6 entre 2 y sabrás que necesitas 3 tazas de harina.</p>
                
                <h3>3. Jugar</h3>
                <p>Cuando juegas con tus amigos, la división puede ayudarte a repartir los juguetes o los equipos. Si tienes 15 cartas y quieres que cada jugador tenga el mismo número de cartas, puedes dividir las 15 cartas entre el número de jugadores. Así, todos tendrán la misma cantidad y el juego será justo.</p>
                
                <h2>Partes de una división</h2>
                <p>Para entender mejor la división, es importante conocer sus partes. Una división tiene tres partes principales: el dividendo, el divisor y el cociente.</p>
                
                <h3>1. Dividendo</h3>
                <p>El dividendo es el número que vamos a dividir. Por ejemplo, si queremos dividir 12 entre 4, el número 12 es el dividendo.</p>
                
                <h3>2. Divisor</h3>
                <p>El divisor es el número por el cual vamos a dividir. En el ejemplo de dividir 12 entre 4, el número 4 es el divisor.</p>
                
                <h3>3. Cociente</h3>
                <p>El cociente es el resultado de la división. En nuestro ejemplo, cuando dividimos 12 entre 4, el resultado es 3. El número 3 es el cociente.</p>
                
                <h2>Cómo hacer una división</h2>
                <p>Ahora que conocemos las partes de una división, vamos a aprender cómo hacer una división paso a paso. Vamos a usar el ejemplo de dividir 15 entre 3.</p>
                
                <h3>Paso 1: Escribir la división</h3>
                <p>Primero, escribimos la división en forma de una operación matemática: 15 ÷ 3.</p>
                
                <h3>Paso 2: Dividir</h3>
                <p>Luego, pensamos en cuántas veces el número 3 cabe en el número 15. Sabemos que 3 x 5 = 15, así que el número 3 cabe 5 veces en 15. Esto significa que 15 ÷ 3 = 5.</p>
                
                <h3>Paso 3: Escribir el cociente</h3>
                <p>Finalmente, escribimos el resultado, que es el cociente. En este caso, el cociente es 5.</p>
                
                <h2>Practicando la división</h2>
                <p>¡Practicar la división puede ser muy divertido! Aquí tienes algunos problemas de división para que practiques:</p>
                
                <h3>Problema 1</h3>
                <p>Dividir 20 entre 4. ¿Cuál es el cociente?</p>
                
                <h3>Problema 2</h3>
                <p>Dividir 18 entre 3. ¿Cuál es el cociente?</p>
                
                <h3>Problema 3</h3>
                <p>Dividir 16 entre 2. ¿Cuál es el cociente?</p>
                
                <p>Intenta resolver estos problemas por tu cuenta. ¡Estoy seguro de que lo harás muy bien!</p>
                
                <h2>División en la vida diaria</h2>
                <p>La división no solo es útil en la escuela, sino también en la vida diaria. Aquí tienes algunos ejemplos de cómo puedes usar la división todos los días:</p>
                
                <h3>En el supermercado</h3>
                <p>Imagina que tu mamá compra una caja de 24 jugos y quiere repartirlos entre 6 niños. Si usamos la división, podemos saber cuántos jugos recibe cada niño. Dividimos 24 entre 6 y obtenemos 4. Así que cada niño recibe 4 jugos.</p>
                
                <h3>En el deporte</h3>
                <p>Si estás jugando al fútbol y tienes 18 jugadores, puedes usar la división para formar equipos. Si divides 18 jugadores entre 2 equipos, cada equipo tendrá 9 jugadores.</p>
                
                <h3>En el dinero</h3>
                <p>Si tienes 50 monedas y quieres compartirlas con 5 amigos, puedes dividir 50 entre 5. Cada amigo recibirá 10 monedas. Así, todos tienen la misma cantidad de dinero para gastar.</p>
                
                <h2>Conclusión</h2>
                <p>La división es una herramienta matemática muy poderosa que nos ayuda en muchas situaciones. Nos permite repartir cosas de manera justa, entender las recetas, jugar con nuestros amigos y mucho más. Al aprender a dividir, estás adquiriendo una habilidad que te ayudará toda tu vida.</p>
                
                <p>Recuerda practicar la división siempre que puedas. Cuanto más practiques, mejor lo harás. ¡Y no olvides que las matemáticas pueden ser muy divertidas!</p>
                
                <p>Espero que hayas disfrutado aprendiendo sobre la división y que ahora entiendas por qué es tan importante. ¡Sigue practicando y te convertirás en un experto en divisiones en muy poco tiempo!</p>',
                'grado' => 3,
                'user_id' => 3,
                'area_id' => 36,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ],
            [
                'id' => 33,
                'titulo' => '¿Cómo nació nuestro planeta Tierra?', 
                'texto' => '<p>¡Hola, amiguito! Hoy vamos a aprender sobre algo realmente asombroso: cómo nació nuestro planeta Tierra. Hace mucho, mucho tiempo, el planeta en el que vivimos no existía. Todo comenzó con una gran explosión y muchas cosas increíbles que pasaron después. ¿Estás listo para descubrir esta maravillosa historia? ¡Vamos a empezar!</p>

                <h2>La Gran Explosión</h2>
                <p>Hace unos 13.800 millones de años, ocurrió algo llamado el Big Bang, o la Gran Explosión. En ese momento, todo el universo estaba en un solo punto muy, muy pequeño y de repente explotó. Esa explosión creó todo lo que conocemos: las estrellas, los planetas, el espacio, ¡todo!</p>
            
                <h2>La Formación de las Estrellas y las Galaxias</h2>
                <p>Después del Big Bang, el universo estaba lleno de partículas muy pequeñas que comenzaron a juntarse para formar estrellas. Estas estrellas se agruparon en grandes conjuntos llamados galaxias. Nuestro planeta, la Tierra, se encuentra en una galaxia llamada Vía Láctea.</p>
            
                <h2>El Sistema Solar</h2>
                <p>Dentro de la Vía Láctea, hay muchas estrellas y una de ellas es nuestro Sol. Alrededor del Sol hay varios planetas, incluidos la Tierra, Marte, Venus, Júpiter y otros más. Este conjunto de planetas y el Sol se llama el Sistema Solar.</p>
            
                <h2>El Nacimiento de la Tierra</h2>
                <p>Hace unos 4.600 millones de años, nuestro planeta comenzó a formarse a partir de una nube gigante de gas y polvo que giraba alrededor del Sol. Poco a poco, las partículas de polvo se fueron uniendo para formar rocas más grandes. Estas rocas siguieron uniéndose y chocando entre sí, creando un planeta en crecimiento. Así fue como nació la Tierra.</p>
            
                <h2>La Tierra Joven</h2>
                <p>Al principio, la Tierra era un lugar muy diferente al que conocemos hoy. Era un enorme bola de fuego caliente y había muchas erupciones volcánicas. El planeta estaba cubierto de lava y gases tóxicos. Pero con el tiempo, la superficie de la Tierra comenzó a enfriarse y formó una corteza sólida.</p>
            
                <h2>El Agua en la Tierra</h2>
                <p>El agua es esencial para la vida y, afortunadamente, comenzó a aparecer en la Tierra joven. Nadie sabe con certeza de dónde vino toda el agua, pero los científicos creen que pudo haber llegado a través de cometas y asteroides que chocaron con la Tierra. Estos objetos espaciales contenían hielo, y cuando se derretían, llenaban los océanos y los ríos de nuestro planeta.</p>
            
                <h2>El Surgimiento de la Vida</h2>
                <p>Hace unos 3.800 millones de años, algo increíble ocurrió: la vida comenzó a aparecer en la Tierra. Los primeros seres vivos eran organismos muy pequeños y simples, como las bacterias. Estos organismos vivían en los océanos y poco a poco fueron evolucionando, es decir, cambiando y adaptándose para sobrevivir mejor en su entorno.</p>
            
                <h2>Los Primeros Seres Vivos</h2>
                <p>Con el tiempo, los organismos simples se convirtieron en formas de vida más complejas. Aparecieron plantas y animales pequeños en los océanos. Luego, algunas plantas y animales comenzaron a vivir en la tierra. Uno de los primeros animales en salir del agua fueron los anfibios, que podían vivir tanto en el agua como en la tierra.</p>
            
                <h2>Los Dinosaurios</h2>
                <p>Hace unos 230 millones de años, los dinosaurios aparecieron en la Tierra. Estos increíbles animales dominaban el planeta y había muchos tipos diferentes, desde pequeños dinosaurios del tamaño de un pollo hasta enormes dinosaurios que eran más grandes que un autobús escolar. Los dinosaurios vivieron en la Tierra durante mucho tiempo, hasta que se extinguieron hace unos 65 millones de años.</p>
            
                <h2>La Era de los Mamíferos</h2>
                <p>Después de que los dinosaurios desaparecieron, los mamíferos comenzaron a prosperar. Los mamíferos son animales que tienen pelo o pelaje y amamantan a sus crías con leche. Los primeros mamíferos eran pequeños, pero con el tiempo, se convirtieron en animales más grandes y diversos. Algunos mamíferos que vivieron hace mucho tiempo se parecían a los elefantes, los rinocerontes y los osos.</p>
            
                <h2>Los Primeros Humanos</h2>
                <p>Hace unos 2 millones de años, los primeros seres humanos comenzaron a aparecer. Estos primeros humanos eran diferentes a nosotros, pero eran nuestros ancestros. Con el tiempo, los humanos evolucionaron y se volvieron más inteligentes. Aprendieron a usar herramientas, a cazar animales y a cultivar plantas para alimentarse.</p>
            
                <h2>La Civilización Humana</h2>
                <p>Los humanos siguieron evolucionando y comenzaron a formar grupos y sociedades. Aprendieron a construir casas, a crear arte y a desarrollar lenguajes para comunicarse. Las primeras civilizaciones humanas surgieron en lugares como Mesopotamia, Egipto, China e India. Estas civilizaciones construyeron ciudades, inventaron la escritura y crearon leyes para vivir en paz.</p>
            
                <h2>La Tierra Hoy</h2>
                <p>Hoy en día, la Tierra es un lugar muy diferente al que era hace millones de años. Nuestro planeta está lleno de vida, con millones de especies de plantas y animales. Los seres humanos hemos construido ciudades, carreteras y puentes. Hemos explorado casi todos los rincones de la Tierra y hasta hemos viajado al espacio.</p>
            
                <h2>La Importancia de Cuidar la Tierra</h2>
                <p>Es muy importante cuidar nuestro planeta porque es nuestro hogar. La Tierra nos da todo lo que necesitamos para vivir: aire para respirar, agua para beber y comida para alimentarnos. Debemos proteger la naturaleza, conservar los bosques, limpiar los ríos y cuidar a los animales. Si todos hacemos nuestra parte, podremos mantener la Tierra sana y hermosa para las futuras generaciones.</p>
            
                <h2>Conclusión</h2>
                <p>La historia de cómo nació nuestro planeta Tierra es increíble y llena de maravillas. Desde la gran explosión del Big Bang hasta la aparición de la vida y la evolución de los seres humanos, cada etapa es fascinante. Ahora sabes cómo se formó la Tierra y por qué es tan especial.</p>
            
                <p>Recuerda siempre cuidar de nuestro planeta y respetar la naturaleza. ¡Gracias por aprender con nosotros y espero que hayas disfrutado esta maravillosa historia!</p>',
                'grado' => 2,
                'user_id' => 3,
                'area_id' => 38,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ],
            [
                'id' => 34,
                'titulo' => '¿Qué es la ley de gravedad?', 
                'texto' => '    <p>Hola, amiguito. Hoy vamos a hablar sobre algo muy interesante y que nos afecta a todos: la ley de gravedad. La gravedad es una fuerza que siempre está presente en nuestras vidas, aunque no la veamos. Nos mantiene pegados al suelo y hace que las cosas caigan cuando las soltamos. ¿Quieres saber más sobre esta increíble fuerza? ¡Vamos a descubrirlo juntos!</p>

                <h2><b>La Historia de la Gravedad<h2></b>
                 <p>La ley de gravedad fue descubierta hace muchos años por un científico llamado Isaac Newton. Cuenta la leyenda que Newton estaba sentado debajo de un manzano cuando una manzana cayó y le golpeó en la cabeza. Este simple hecho le hizo pensar en por qué la manzana había caído al suelo en lugar de flotar hacia arriba. Así, comenzó a desarrollar sus ideas sobre la gravedad.</p>
                 
                <h2><b>¿Qué es la Gravedad?<h2></b>
                 <p>La gravedad es una fuerza que atrae los objetos hacia el centro de la Tierra. Es lo que nos mantiene en el suelo y lo que hace que las cosas caigan cuando las soltamos. La gravedad no solo existe en la Tierra; también está presente en todo el universo. Todos los planetas, estrellas y otros objetos en el espacio tienen gravedad y se atraen unos a otros.</p>
                 
                <h2><b>¿Cómo Funciona la Gravedad?<h2></b>
                 <p>La gravedad funciona atrayendo los objetos entre sí. Cuanto más grande es un objeto, mayor es su fuerza de gravedad. Por eso, la Tierra tiene una fuerza de gravedad mucho mayor que un pequeño juguete. La fuerza de gravedad también depende de la distancia entre los objetos. Cuanto más cerca están dos objetos, mayor es la fuerza de gravedad entre ellos.</p>
                 
                <h2><b>La Gravedad en Nuestra Vida Diaria<h2></b>
                 <p>La gravedad es muy importante en nuestra vida diaria. Sin ella, todo sería muy diferente. Aquí tienes algunos ejemplos de cómo la gravedad afecta nuestras vidas:</p>
                 
                 <h3><b>1. Caminar y Correr<h3></b>
                 <p>La gravedad nos mantiene pegados al suelo, lo que nos permite caminar y correr sin flotar por el aire. Gracias a la gravedad, podemos movernos de un lugar a otro con facilidad.</p>
                 
                 <h3><b>2. Jugar con Pelotas<h3></b>
                 <p>Cuando lanzas una pelota al aire, la gravedad hace que vuelva a caer al suelo. Esto es lo que hace que los juegos como el baloncesto, el fútbol y el béisbol sean posibles.</p>
                 
                 <h3><b>3. Mantener el Agua en su Lugar<h3></b>
                 <p>La gravedad también mantiene el agua en los ríos, lagos y océanos. Sin gravedad, el agua flotaría en el aire y no podríamos nadar ni beberla.</p>
                 
                <h2><b>La Gravedad y los Planetas<h2></b>
                 <p>La gravedad no solo afecta a las cosas en la Tierra; también juega un papel muy importante en el espacio. La gravedad es lo que mantiene a los planetas en órbita alrededor del Sol. El Sol tiene una fuerza de gravedad muy grande porque es un objeto muy grande y masivo. Esta fuerza atrae a los planetas y los mantiene girando a su alrededor.</p>
                 
                 <h3><b>Los Satélites y la Gravedad<h3></b>
                 <p>La gravedad también mantiene a los satélites en órbita alrededor de la Tierra. Los satélites son objetos que los humanos han enviado al espacio para ayudarnos con cosas como el clima, la comunicación y la navegación. Sin la gravedad, estos satélites no podrían mantenerse en sus órbitas y caerían al suelo.</p>
                 
                <h2><b>Experimentos con la Gravedad<h2></b>
                 <p>La gravedad es algo que podemos observar y experimentar de muchas maneras. Aquí tienes algunos experimentos que puedes hacer para entender mejor cómo funciona la gravedad:</p>
                 
                 <h3><b>Experimento 1: Caída Libre<h3></b>
                 <p>Para este experimento, necesitarás una pelota y una pluma. Sostén ambos objetos a la misma altura y suéltalos al mismo tiempo. Observa cómo la pelota cae más rápido que la pluma. Esto sucede porque la resistencia del aire afecta más a la pluma debido a su forma y peso.</p>
                 
                 <h3><b>Experimento 2: Peso en Diferentes Lugares<h3></b>
                 <p>Este experimento requiere una báscula. Pesa un objeto en diferentes lugares de tu casa o escuela, como en el primer piso y en el segundo piso. Notarás que el peso del objeto no cambia porque la gravedad en la Tierra es prácticamente la misma en todas partes.</p>
                 
                <h2><b>La Gravedad y el Universo<h2></b>
                 <p>La gravedad no solo es importante en la Tierra, sino que también es esencial para el funcionamiento del universo. Sin la gravedad, las estrellas y los planetas no podrían formarse. La gravedad es lo que mantiene unidas las galaxias y lo que hace que los planetas giren alrededor de las estrellas.</p>
                 
                 <h3><b>Agujeros Negros<h3></b>
                 <p>Un agujero negro es un objeto en el espacio con una gravedad tan fuerte que nada puede escapar de él, ni siquiera la luz. Los agujeros negros se forman cuando una estrella muy grande colapsa sobre sí misma. La gravedad en un agujero negro es tan fuerte que distorsiona el espacio y el tiempo a su alrededor.</p>
                 
                <h2><b>La Gravedad y el Futuro<h2></b>
                 <p>La gravedad seguirá siendo una parte importante de nuestras vidas en el futuro. Los científicos continúan estudiando la gravedad para entender mejor cómo funciona y cómo podemos usarla para explorar el espacio. Los conocimientos sobre la gravedad nos ayudarán a enviar astronautas a otros planetas y a descubrir más sobre el universo.</p>
                 
                <h2><b>Datos Curiosos sobre la Gravedad<h2></b>
                 <p>La gravedad es una fuerza muy interesante y hay muchos datos curiosos sobre ella. Aquí tienes algunos:</p>
                 
                 <h3><b>1. La Gravedad en la Luna<h3></b>
                 <p>La gravedad en la Luna es mucho más débil que en la Tierra. Por eso, los astronautas pueden saltar muy alto cuando están en la Luna. La gravedad lunar es solo una sexta parte de la gravedad terrestre.</p>
                 
                 <h3><b>2. La Gravedad y los Rascacielos<h3></b>
                 <p>La gravedad afecta a los edificios altos, como los rascacielos. Los arquitectos tienen que tener en cuenta la gravedad cuando diseñan estos edificios para asegurarse de que no se caigan.</p>
                 
                 <h3><b>3. Gravedad Cero<h3></b>
                 <p>En el espacio, los astronautas experimentan lo que se llama "gravedad cero" o ingravidez. Esto sucede porque están en una órbita constante alrededor de la Tierra, lo que hace que se sientan como si no tuvieran peso. En realidad, la gravedad aún está presente, pero los astronautas están en caída libre, lo que les hace sentir ingrávidos.</p>
                 
                <h2><b>Conclusión<h2></b>
                 <p>La ley de gravedad es una de las fuerzas más importantes del universo. Nos mantiene en el suelo, permite que los planetas orbiten alrededor del Sol y hace posible que los satélites funcionen. Sin la gravedad, el mundo sería un lugar muy diferente.</p>
                 
                 <p>Espero que hayas disfrutado aprendiendo sobre la gravedad y que ahora entiendas mejor cómo funciona. La próxima vez que veas algo caer o que juegues con una pelota, recuerda que es gracias a la gravedad que esas cosas ocurren. ¡La ciencia es realmente increíble!</p>
                 
                 <p>Gracias por aprender con nosotros y sigue explorando el maravilloso mundo de la ciencia. ¡Hasta la próxima, amiguito!</p>',
                'grado' => 5,
                'user_id' => 3,
                'area_id' => 43,
                'created_at' => now(),
                'updated_at' => now(),
                'publicado' => 1
            ]
        ];

        DB::table('posts')->insert($data);

    }
}
