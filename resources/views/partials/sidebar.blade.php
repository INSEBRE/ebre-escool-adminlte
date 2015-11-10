<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">NAVEGACIÓ PRINCIPAL</li>

            <!-- PASSAR LLISTA -->
            <li class="active treeview">
                <a href="#">
                    <i class="fa fa-bell-o"></i> <span>Passar llista</span>
                </a>
            </li>

            <!-- TUTORIA -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Tutoria</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Consultes faltes. Pendent</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Llista de classe</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Tutoritza els teus grups</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Llista de faltes per alumnes</a></li>
                </ul>
            </li>

            <!-- HORARIS -->
            <li>
                <a href="#">
                    <i class="fa fa-th"></i> <span>Horaris</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Els meus horaris</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Horaris de tots els professors</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Tots els horaris de grups</a></li>
                </ul>
            </li>

            <!-- MATRICULA -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i> <span>Matrícula</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Matriculació</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Consultar</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Modificar</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Eliminar</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Canvi de grup</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Modificar dades personals</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Sense modificar dades personals</a></li>

                </ul>
            </li>

            <!-- INFORMES -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Informes</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>

                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-circle-o text-aqua"></i> Llençol general del centre</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Professors <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Llençols de professors</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Llençols de professors </br>d'altres anys</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Llista de professors</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Tutors de grups</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Alumnes <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Llista de classe</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Llençols de estudiants </br>d'un grup</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Correus dels estudiants</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Currículum <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Departaments</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Estudis</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Curs</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Grups de classe</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Mòduls professionals</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Unitats formatives</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Lliçons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Matrícula <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Matrícula de periodes acadèmics</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Matrícula per estudis</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Tots els matriculats per periode acadèmic</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Assistència<i class="fa fa-angle-left pull-right"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Informes d'inventari<i class="fa fa-angle-left pull-right"></i></a>
                    </li>
                </ul>
            </li>

            <!-- INVENTARI -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-laptop"></i>
                    <span>Inventari</span>
                </a>
            </li>

            <!-- MANTENIMENT -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gear"></i> <span>Manteniment</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Currículum <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Dates UFs/UDs</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Dates d'una UF concreta</a></li>
                        </ul>
                    </li>
                </ul>
            </li>


            <!-- MANTENIMENTS -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>Manteniments</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Persones <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Persones</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Professors</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Professors per període</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Personal laboral</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Tipus personal laboral</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Alumnes</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Tipus identificador personal</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Poblacions</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Províncies</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Unitats organitzatives</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Espais</a></li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Pla d'estudis <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Periodes Acadèmics</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Unitat Organitzativa</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Departaments/Famílies</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Estudis</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Lleis</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Cicle</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Curs</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Grup de Classe(tots)</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Grup de Classe(anys)</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Mòdul Professional</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> MPs per període</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Tipus Mòdul Professional</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Subtipus Mòdul Professional</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Unitat Formativa</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> UPs per període</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Lliçons</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Matrícula <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Matrícula</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Matrícula UFs</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Assistència <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Incidènces assistència</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Tipus d'assistència</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Franjes horàries</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Estudiants ocults</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Horaris <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Hores no lectives</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Lliçons no lectives</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Torn</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-circle-o"></i> Inventari <i class="fa fa-angle-left pull-right"></i></a>
                        <ul class="treeview-menu">
                            <li><a href="#"><i class="fa fa-circle-o"></i> Tipus identificador extern</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Tipus material</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Marques</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Models</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Proveïdors</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Origen diners</a></li>
                            <li><a href="#"><i class="fa fa-circle-o"></i> Codi de barres</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            <!-- GESTIÓ -->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench"></i> <span>Gestió</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Persones</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Usuaris</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Usuaris GC</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Usuaris Google Apps</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Usuaris LDAP</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Canvi de password</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Crear password inicial</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Grups</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Canvis massius de passwd</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Preferències</a></li>
                </ul>
            </li>

            <!-- CALENDARI -->
            <li>
                <a href="#">
                    <i class="fa fa-calendar"></i> <span>Calendari</span>
                    <small class="label pull-right bg-red">3</small>
                </a>
            </li>

            <!-- MAIL -->
            <li>
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Mailbox</span>
                    <small class="label pull-right bg-yellow">12</small>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>