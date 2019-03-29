@extends('admin.layouts.master')
@section('content')


			<ul class="breadcrumb">
                    <li>
                        <i class="icon-home"></i>
                        <a href="index.html">Home</a>
                        <i class="icon-angle-right"></i>
                    </li>
                    <li><a href="#">All Category</a></li>
                </ul>

                <div class="row-fluid sortable">
                    <div class="box span12">
                        <div class="box-header" data-original-title>
                            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
                            <div class="box-icon">
                                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
                            </div>
                        </div>
                        <div class="box-content">
                            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                              <thead>
                                  <tr>
                                      <th>Username</th>
                                      <th>Date registered</th>
                                      <th>Role</th>
                                      <th>Status</th>
                                      <th>Actions</th>
                                  </tr>
                              </thead>
                              <tbody>
                                <tr>
                                    <td>Anton Phunihel</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Alphonse Ivo</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Thancmar Theophanes</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Walerian Khwaja</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Clemens Janko</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Chidubem Gottlob</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hristofor Sergio</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tadhg Griogair</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pollux Beaumont</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Adam Alister</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Carlito Roffe</td>
                                    <td class="center">2012/08/23</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sana Amrin</td>
                                    <td class="center">2012/08/23</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Adinah Ralph</td>
                                    <td class="center">2012/06/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dederick Mihail</td>
                                    <td class="center">2012/06/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Hipólito András</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Fricis Arieh</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Scottie Maximilian</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bao Gaspar</td>
                                    <td class="center">2012/01/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tullio Luka</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Felice Arseniy</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Finlay Alf</td>
                                    <td class="center">2012/02/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Theophilus Nala</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Sullivan Robert</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kristóf Filiberto</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kuzma Edvard</td>
                                    <td class="center">2012/01/21</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-success">Active</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bünyamin Kasper</td>
                                    <td class="center">2012/08/23</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Crofton Arran</td>
                                    <td class="center">2012/08/23</td>
                                    <td class="center">Staff</td>
                                    <td class="center">
                                        <span class="label label-important">Banned</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bernhard Shelah</td>
                                    <td class="center">2012/06/01</td>
                                    <td class="center">Admin</td>
                                    <td class="center">
                                        <span class="label">Inactive</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Grahame Miodrag</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Innokentiy Celio</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kostandin Warinhari</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ajith Hristijan</td>
                                    <td class="center">2012/03/01</td>
                                    <td class="center">Member</td>
                                    <td class="center">
                                        <span class="label label-warning">Pending</span>
                                    </td>
                                    <td class="center">
                                        <a class="btn btn-success" href="#">
                                            <i class="halflings-icon white zoom-in"></i>
                                        </a>
                                        <a class="btn btn-info" href="#">
                                            <i class="halflings-icon white edit"></i>
                                        </a>
                                        <a class="btn btn-danger" href="#">
                                            <i class="halflings-icon white trash"></i>

                                        </a>
                                    </td>
                                </tr>
                              </tbody>
                          </table>
                        </div>
                    </div><!--/span-->

                </div><!--/row-->


@endsection
