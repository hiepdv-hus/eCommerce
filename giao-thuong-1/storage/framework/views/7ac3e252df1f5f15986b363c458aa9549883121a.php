<nav>
	<div class="left-side-menu">
		<div class="slimscroll-menu">
			<!--- Sidemenu -->
			<div id="sidebar-menu">
				<ul class="metismenu" id="side-menu">
					<li class="menu-title">Navigation</li>
					<li>
						<a href="/<?php echo e($ENTRY); ?>">
							<i class="fe-airplay"></i>
							<span> Dashboards </span>
						</a>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-web"></i>
							<span><?php echo e(trans('label.news')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/<?php echo e($ENTRY); ?>/news/add"><?php echo e(trans('label.them_moi')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/news/list"><?php echo e(trans('label.danh_sach')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/category/list_news"><?php echo e(trans('label.danh_muc')); ?></a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi mdi-eventbrite"></i>
							<span><?php echo e(trans('label.event')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/<?php echo e($ENTRY); ?>/event/add"><?php echo e(trans('label.them_moi')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/event/list"><?php echo e(trans('label.danh_sach')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/event/group"><?php echo e(trans('label.event_group')); ?></a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="javascript:void(0)">
							<i class="mdi mdi-artstation"></i>
							<span><?php echo e(trans('label.san_pham')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/<?php echo e($ENTRY); ?>/product/add"><?php echo e(trans('label.them_moi')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/product"><?php echo e(trans('label.danh_sach')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/product/category"><?php echo e(trans('label.danh_muc')); ?></a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi mdi-registered-trademark"></i>
							<span><?php echo e(trans('label.company')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/<?php echo e($ENTRY); ?>/company/add"><?php echo e(trans('label.them_moi')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/company"><?php echo e(trans('label.danh_sach')); ?></a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-cart-plus"></i>
							<span><?php echo e(trans('label.don_hang')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/<?php echo e($ENTRY); ?>/order/add"><?php echo e(trans('label.them_moi')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/order"><?php echo e(trans('label.danh_sach')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/order?new=1"><?php echo e(trans('label.don_hang_moi')); ?></a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-account-multiple-outline"></i>
							<span><?php echo e(trans('label.khach_hang')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/<?php echo e($ENTRY); ?>/customer/list"><?php echo e(trans('label.danh_sach')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/customer/group"><?php echo e(trans('label.nhom_khach_hang')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/contact"><?php echo e(trans('label.lien_he')); ?></a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi mdi-contacts"></i>
							<span><?php echo e(trans('label.clue_contact')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/<?php echo e($ENTRY); ?>/clue-contact/add"><?php echo e(trans('label.them_moi')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/clue-contact/list"><?php echo e(trans('label.danh_sach')); ?></a>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-folder-multiple-image"></i>
							<span><?php echo e(trans('label.thu_vien_media')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/<?php echo e($ENTRY); ?>/media/list"><?php echo e(trans('label.kho_anh')); ?></a>
							</li>
							<li>
								<a href="#"><?php echo e(trans('label.youtube')); ?></a>
								<ul class="submenu">
									<li>
										<a href="/<?php echo e($ENTRY); ?>/videos/youtube/add"><?php echo e(trans('label.them_moi')); ?></a>
										<a href="/<?php echo e($ENTRY); ?>/videos/youtube"><?php echo e(trans('label.danh_sach')); ?></a>
									</li>
								</ul>
							</li>
						</ul>
					</li>

					<li class="has-submenu">
						<a href="#">
							<i class="mdi mdi-account-key-outline"></i>
							<span><?php echo e(trans('label.quan_tri_vien')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="/<?php echo e($ENTRY); ?>/system-user/add"><?php echo e(trans('label.them_moi')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/system-user/list"><?php echo e(trans('label.danh_sach')); ?></a>
							</li>
							<li>
								<a href="/<?php echo e($ENTRY); ?>/system-user/group"><?php echo e(trans('label.nhom_quan_tri')); ?></a>
							</li>
						</ul>
					</li>

					<li>
						<a href="javascript:void(0)">
							<i class="mdi mdi-settings-outline"></i>
							<span><?php echo e(trans('label.cau_hinh')); ?></span>
							<span class="menu-arrow"></span>
						</a>
						<ul class="nav-second-level" aria-expanded="false">
							<li>
								<a href="javascript:void(0)"><?php echo e(trans('label.he_thong')); ?></a>
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
