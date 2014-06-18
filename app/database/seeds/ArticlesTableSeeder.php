<?php
/**
 * Created by PhpStorm.
 * User: arzinoviev
 * Date: 6/17/14
 * Time: 2:51 PM
 */

class ArticlesTableSeeder  extends Seeder {

    public function run()
    {
        Article::truncate();

        Article::create([
            'title'       => 'John Doe',
            'description' => 'John Doe articles',
            'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.'
        ]);

        Article::create([
            'title'       => 'Mike Smith',
            'description' => 'Mike Smith articles',
            'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.'
        ]);

        Article::create([
            'title'       => 'Ivan Sysanin',
            'description' => 'Ivan Sysanin articles',
            'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.'
        ]);

        Article::create([
            'title'       => 'Artem Zinoviev',
            'description' => 'Artem Zinoviev articles',
            'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.'
        ]);

        Article::create([
            'title'       => 'Petya Pypkin',
            'description' => 'Petya Pypkin articles',
            'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.'
        ]);

        Article::create([
            'title'       => 'Ivan Sysanin',
            'description' => 'Ivan Sysanin articles',
            'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.'
        ]);

        Article::create([
            'title'       => 'Kyka Racha',
            'description' => 'Kyka Racha articles',
            'content'     => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.'
        ]);
    }

} 