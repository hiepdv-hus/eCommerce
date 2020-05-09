<nav>
	<div class="left-side-menu">
		<div class="slimscroll-menu">
			<!--- Sidemenu -->
			<div id="sidebar-menu">
				<ul class="metismenu" id="side-menu">
					<li class="menu-title">Navigation</li>
					<li>
						<a href="/{{$ENTRY}}">
							<i class="fe-airplay"></i>
							<span> Dashboards </span>
						</a>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-web"></i>
							<span>{{trans('label.news')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/{{$ENTRY}}/news/add">{{trans('label.them_moi')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/news/list">{{trans('label.danh_sach')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/category/list_news">{{trans('label.danh_muc')}}</a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi mdi-eventbrite"></i>
							<span>{{trans('label.event')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/{{$ENTRY}}/event/add">{{trans('label.them_moi')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/event/list">{{trans('label.danh_sach')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/event/group">{{trans('label.event_group')}}</a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="javascript:void(0)">
							<i class="mdi mdi-artstation"></i>
							<span>{{trans('label.san_pham')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/{{$ENTRY}}/product/add">{{trans('label.them_moi')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/product">{{trans('label.danh_sach')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/product/category">{{trans('label.danh_muc')}}</a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi mdi-registered-trademark"></i>
							<span>{{trans('label.company')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/{{$ENTRY}}/company/add">{{trans('label.them_moi')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/company">{{trans('label.danh_sach')}}</a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-cart-plus"></i>
							<span>{{trans('label.don_hang')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/{{$ENTRY}}/order/add">{{trans('label.them_moi')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/order">{{trans('label.danh_sach')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/order?new=1">{{trans('label.don_hang_moi')}}</a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-account-multiple-outline"></i>
							<span>{{trans('label.khach_hang')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/{{$ENTRY}}/customer/list">{{trans('label.danh_sach')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/customer/group">{{trans('label.nhom_khach_hang')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/contact">{{trans('label.lien_he')}}</a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi mdi-contacts"></i>
							<span>{{trans('label.clue_contact')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/{{$ENTRY}}/clue-contact/add">{{trans('label.them_moi')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/clue-contact/list">{{trans('label.danh_sach')}}</a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-folder-multiple-image"></i>
							<span>{{trans('label.thu_vien_media')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/{{$ENTRY}}/media/list">{{trans('label.kho_anh')}}</a>
							</li>
							<li>
								<a href="#">{{trans('label.youtube')}}</a>
								<ul class="submenu">
									<li>
										<a href="/{{$ENTRY}}/videos/youtube/add">{{trans('label.them_moi')}}</a>
										<a href="/{{$ENTRY}}/videos/youtube">{{trans('label.danh_sach')}}</a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-account-key-outline"></i>
							<span>{{trans('label.quan_tri_vien')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/{{$ENTRY}}/system-user/add">{{trans('label.them_moi')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/system-user/list">{{trans('label.danh_sach')}}</a>
							</li>
							<li>
								<a href="/{{$ENTRY}}/system-user/group">{{trans('label.nhom_quan_tri')}}</a>
							</li>
						</ul>
					</li>

					<li>
						<a href="javascript:void(0)">
							<i class="mdi mdi-settings-outline"></i>
							<span>{{trans('label.cau_hinh')}}</span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="javascript:void(0)">{{trans('label.he_thong')}}</a>
							</li>
						</ul>
					</li>
				</ul>

			</div>
			<!-- End Sidebar -->

			<div class="clearfix"></div>

		</div>
		<!-- Sidebar -left -->

	</div>
</nav>
