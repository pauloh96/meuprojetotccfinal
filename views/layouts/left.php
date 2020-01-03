<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
       <!--<div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p>asaf</p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
          -->
        <!-- search form -->
       
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    [
                                'label' => 'Projetos',
                                'icon' => 'thumb-tack',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Novo Projeto', 'icon' => 'plus', 'url' => ['projeto/create'],],
                                    ['label' => 'Lista de Projetos', 'icon' => 'list', 'url' => ['projeto/index'],],
                                ],
                            ],
                    [
                                'label' => 'Responsavel',
                                'icon' => 'user',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Novo Responsável', 'icon' => 'plus', 'url' => ['responsavel/create'],],
                                    ['label' => 'Lista de Responsáveis', 'icon' => 'list', 'url' => ['responsavel/index'],],
                                ],
                            ],
                    [
                                'label' => 'Requisito',
                                'icon' => 'tasks',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Novo Requisito', 'icon' => 'plus', 'url' => ['requisito/create'],],
                                    ['label' => 'Lista de Requisito', 'icon' => 'list', 'url' => ['requisito/index'],],
                                ],
                            ],
                   
                   
                    [
                        'label' => 'Horas',
                        'icon' => 'clock-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Cadastro de horas', 'icon' => 'plus', 'url' => ['horas/create'],],
                            ['label' => 'Lista de horas', 'icon' => 'list', 'url' => ['horas/index'],],
                            /*[
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],*/
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
