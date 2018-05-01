<!-- Left Sidebar  -->
        <div class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="nav-devider"></li>
                        <li class="nav-label">Home</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard <span class="label label-rouded label-primary pull-right">2</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('/gesfinancas/dash')}}">Visão Geral </a></li>
                                <li><a href="{{url('/gesfinancas/grafico')}}">Gráficos </a></li>
                            </ul>
                        </li>
                        <li class="nav-label">Lançamento</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-plus"></i><span class="hide-menu">lançamentos<span class="label label-rouded label-warning pull-right">2</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('/gesfinancas/dashboard')}}">Todos os lançamentos</a></li>
                                <li><a href="{{url('contas')}}">Contas e carteiras</a></li>
                            </ul>
                        </li>
                     
                        <li class="nav-label">Relatório</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-balance-scale"></i><span class="hide-menu">relatórios <span class="label label-rouded label-warning pull-right">3</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="#">despesas x receitas</a></li>
                                <li><a href="#">categorais</a></li>
                                <li><a href="#">contas</a></li>
                            </ul>
                        </li>
						
                        <li class="nav-label">Metas</li>
                        <li> <a class="has-arrow  " href="#" aria-expanded="false"><i class="fa fa-calculator"></i><span class="hide-menu">metas<span class="label label-rouded label-warning pull-right">2</span></span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{url('metas')}}">orçamento</a></li>
                                <li><a href="#">desejos</a></li>
                            </ul>
                        </li>
                     
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </div>
        <!-- End Left Sidebar  -->