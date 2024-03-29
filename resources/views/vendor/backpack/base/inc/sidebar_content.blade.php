<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>
<li><a href="{{ backpack_url('elfinder') }}"><i class="fa fa-files-o"></i> <span>{{ trans('backpack::crud.file_manager') }}</span></a></li>
<li><a href="{{url('admin/customer')}}"><i class='fa fa-user'></i> <span>Manage Customer</span></a></li>
<li><a href="{{ backpack_url('tag') }}"><i class='fa fa-tag'></i> <span>Tags</span></a></li>
<li><a href="{{ backpack_url('log') }}"><i class='fa fa-terminal'></i> <span>Logs</span></a></li>
<li><a href="{{ backpack_url('menu-item') }}"><i class="fa fa-list"></i> <span>Menu</span></a></li>
<li><a href="{{ backpack_url('page') }}"><i class='fa fa-file-o'></i> <span>Pages</span></a></li>

    <li>
    <a href="{{ url(config('backpack.base.route_prefix', 'admin').'/language') }}"><i class="fa fa-flag-checkered"></i> Languages</a>
    </li>