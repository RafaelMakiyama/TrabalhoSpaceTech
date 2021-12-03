<?php
    require_once 'autoload.php';

    $driverDatabaseOracle = new OracleAdapter(new Oracle());
    $driverDatabasePostgres = new PostgresAdapter(new Postgres());
    $driverDatabaseMongo = new MongoAdapter(new Mongo());
    $driverDatabaseMariaDB = new MariaDBAdapter(new MariaDB());
    $driverDatabaseFirebase = new FireBaseAdapter(new FireBase());
    $driverDatabaseMysql = new MySqlAdapter(new Mysql());

    echo '<h2>Streamings e seus respectivos databases:</h2>';
    $DisneyPlus = new Streaming($driverDatabaseOracle);
    echo 'DisneyPlus: ';
    $DisneyPlus->listarFilmes();

    $Netflixxx33 = new Streaming($driverDatabasePostgres);
    echo 'Netflixxx33: ';
    $Netflixxx33->listarFilmes();

    $DarkFilms = new Streaming($driverDatabaseMongo);
    echo 'DarkFilms: ';
    $DarkFilms->listarFilmes();
    
    $FullAnimations = new Streaming($driverDatabaseMariaDB);
    echo 'FullAnimations: ';
    $FullAnimations->listarFilmes();

    $AnimakaiTV2 = new Streaming($driverDatabasePostgres);
    echo 'AnimakaiTV2: ';
    $AnimakaiTV2->listarFilmes();

    $SkyPobre = new Streaming($driverDatabaseOracle);
    echo 'SkyPobre: ';
    $SkyPobre->listarFilmes();

    $PlusOne = new Streaming($driverDatabaseMongo);
    echo 'PlusOne: ';
    $PlusOne->listarFilmes();

    $AcademicGreen = new Streaming($driverDatabaseFirebase);
    echo 'AcademicGreen: ';
    $AcademicGreen->listarFilmes();

    $NorthTV = new Streaming($driverDatabaseFirebase);
    echo 'NorthTV: ';
    $NorthTV->listarFilmes();

    $TelgoPlus = new Streaming($driverDatabaseMysql);
    echo 'TelgoPlus: ';
    $TelgoPlus->listarFilmes();

    $AvianPlus = new Streaming($driverDatabaseMongo);
    echo 'AvianPlus: ';
    $AvianPlus->listarFilmes();

    echo '<br><h2>streamings conectando com diferentes databases</h2>';

    $SkyPobre = new Streaming($driverDatabasePostgres);
    echo 'SkyPobre: ';
    $SkyPobre->listarFilmes();

    $Netflixxx33 = new Streaming($driverDatabaseMongo);
    echo 'Netflixxx33: ';
    $Netflixxx33->listarFilmes();

    $PlusOne = new Streaming($driverDatabaseMysql);
    echo 'PlusOne: ';
    $PlusOne->listarFilmes();