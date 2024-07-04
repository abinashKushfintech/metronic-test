<header class="header fixed top-0 z-10 left-0 right-0 flex items-stretch shrink-0 bg-[#fefefe] dark:bg-coal-500"
	data-sticky="true" data-sticky-class="shadow-sm dark:border-b dark:border-b-coal-100" data-sticky-name="header"
	id="header">
	<!-- begin: container -->
	<div class="container-fixed flex justify-between items-stretch lg:gap-4" id="header_container">
		<div class="flex gap-1 lg:hidden items-center -ml-1">
			<a class="shrink-0" href="html/demo1.html">
				<img class="max-h-[25px] w-full" src="assets/media/app/mini-logo.svg" />
			</a>
			<div class="flex items-center">
				<button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#sidebar">
					<i class="ki-filled ki-menu">
					</i>
				</button>
				<button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#megamenu_wrapper">
					<i class="ki-filled ki-burger-menu-2">
					</i>
				</button>
			</div>
		</div>
		<div class="flex items-stretch" id="megamenu_container">
			<div class="flex items-stretch" data-reparent="true" data-reparent-mode="prepend|lg:prepend"
				data-reparent-target="body|lg:#megamenu_container">
				<div class="hidden lg:flex lg:items-stretch" data-drawer="true"
					data-drawer-class="drawer drawer-start fixed z-10 top-0 bottom-0 w-full mr-5 max-w-[250px] p-5 lg:p-0 overflow-auto"
					data-drawer-enable="true|lg:false" id="megamenu_wrapper">
					<div class="menu flex-col lg:flex-row gap-5 lg:gap-7.5" data-menu="true" id="megamenu">
						<div class="menu-item active">
							<a class="menu-link text-nowrap text-sm text-gray-700 font-medium menu-item-hover:text-primary menu-item-active:text-gray-900 menu-item-active:font-semibold"
								href="html/demo1.html">
								<span class="menu-title text-nowrap">
									Home
								</span>
							</a>
						</div>
						<div class="menu-item" data-menu-item-placement="bottom-start" data-menu-item-toggle="accordion|lg:dropdown"
							data-menu-item-trigger="click|lg:hover">
							<div
								class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
								<span class="menu-title text-nowrap">
									Public Profiles
								</span>
								<span class="menu-arrow flex lg:hidden">
									<i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
									</i>
									<i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
									</i>
								</span>
							</div>
							<div class="menu-dropdown w-full gap-0 lg:max-w-[875px]">
								<div class="pt-4 pb-2 lg:p-7.5">
									<div class="grid lg:grid-cols-2 gap-5 lg:gap-10">
										<div class="menu menu-default menu-fit flex-col">
											<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
												Profiles
											</h3>
											<div class="grid lg:grid-cols-2 lg:gap-5">
												<div class="flex flex-col">
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/default.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-badge">
																</i>
															</span>
															<span class="menu-title grow-0">
																Default
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/creator.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-coffee">
																</i>
															</span>
															<span class="menu-title grow-0">
																Creator
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/company.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-abstract-41">
																</i>
															</span>
															<span class="menu-title grow-0">
																Company
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/nft.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-bitcoin">
																</i>
															</span>
															<span class="menu-title grow-0">
																NFT
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/blogger.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-message-text">
																</i>
															</span>
															<span class="menu-title grow-0">
																Blogger
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/crm.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-devices">
																</i>
															</span>
															<span class="menu-title grow-0">
																CRM
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/gamer.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-ghost">
																</i>
															</span>
															<span class="menu-title grow-0">
																Gamer
															</span>
														</a>
													</div>
												</div>
												<div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/feeds.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-book">
																</i>
															</span>
															<span class="menu-title grow-0">
																Feeds
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/plain.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-files">
																</i>
															</span>
															<span class="menu-title grow-0">
																Plain
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/profiles/modal.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-mouse-square">
																</i>
															</span>
															<span class="menu-title grow-0">
																Modal
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-financial-schedule">
																</i>
															</span>
															<span class="menu-title grow-0">
																Freelancer
															</span>
															<span class="menu-badge">
																<span class="badge badge-xs">
																	Soon
																</span>
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-technology-4">
																</i>
															</span>
															<span class="menu-title grow-0">
																Developer
															</span>
															<span class="menu-badge">
																<span class="badge badge-xs">
																	Soon
																</span>
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-users">
																</i>
															</span>
															<span class="menu-title grow-0">
																Team
															</span>
															<span class="menu-badge">
																<span class="badge badge-xs">
																	Soon
																</span>
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-calendar-tick">
																</i>
															</span>
															<span class="menu-title grow-0">
																Events
															</span>
															<span class="menu-badge">
																<span class="badge badge-xs">
																	Soon
																</span>
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
										<div class="menu menu-default menu-fit flex-col">
											<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
												Other Pages
											</h3>
											<div class="grid lg:grid-cols-2 lg:gap-5">
												<div class="flex flex-col">
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/projects/3-columns.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-element-6">
																</i>
															</span>
															<span class="menu-title grow-0">
																Projects - 3 Columns
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/projects/2-columns.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-element-4">
																</i>
															</span>
															<span class="menu-title grow-0">
																Projects - 2 Columns
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/works.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-office-bag">
																</i>
															</span>
															<span class="menu-title grow-0">
																Works
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/teams.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-people">
																</i>
															</span>
															<span class="menu-title grow-0">
																Teams
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/network.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-icon">
																</i>
															</span>
															<span class="menu-title grow-0">
																Network
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/activity.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-chart-line-up-2">
																</i>
															</span>
															<span class="menu-title grow-0">
																Activity
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/campaigns/card.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-element-11">
																</i>
															</span>
															<span class="menu-title grow-0">
																Campaigns - Card
															</span>
														</a>
													</div>
												</div>
												<div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/campaigns/list.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-kanban">
																</i>
															</span>
															<span class="menu-title grow-0">
																Campaigns - List
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/public-profile/empty.html" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-file-sheet">
																</i>
															</span>
															<span class="menu-title grow-0">
																Empty Page
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-document">
																</i>
															</span>
															<span class="menu-title grow-0">
																Documents
															</span>
															<span class="menu-badge">
																<span class="badge badge-xs">
																	Soon
																</span>
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-award">
																</i>
															</span>
															<span class="menu-title grow-0">
																Badges
															</span>
															<span class="menu-badge">
																<span class="badge badge-xs">
																	Soon
																</span>
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#" tabindex="0">
															<span class="menu-icon">
																<i class="ki-filled ki-gift">
																</i>
															</span>
															<span class="menu-title grow-0">
																Awards
															</span>
															<span class="menu-badge">
																<span class="badge badge-xs">
																	Soon
																</span>
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none bg-light-active dark:bg-coal-500 border border-gray-300 lg:border-0 lg:border-t lg:border-t-gray-300 dark:lg:border-t-gray-100 px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5">
									<div class="flex flex-col gap-1.5">
										<div class="text-md font-semibold text-gray-900 leading-none">
											Read to Get Started ?
										</div>
										<div class="text-2sm fomt-medium text-gray-600">
											Take your docs to the next level of Metronic
										</div>
									</div>
									<a class="btn btn-sm btn-dark" href="#">
										Read Documentation
									</a>
								</div>
							</div>
						</div>
						<div class="menu-item" data-menu-item-offset="-300px, 0" data-menu-item-overflow="true"
							data-menu-item-placement="bottom-start" data-menu-item-toggle="accordion|lg:dropdown"
							data-menu-item-trigger="click|lg:hover">
							<div
								class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
								<span class="menu-title text-nowrap">
									My Account
								</span>
								<span class="menu-arrow flex lg:hidden">
									<i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
									</i>
									<i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
									</i>
								</span>
							</div>
							<div class="menu-dropdown flex-col lg:flex-row gap-0 w-full lg:max-w-[1240px]">
								<div
									class="lg:w-[250px] mt-2 lg:mt-0 lg:border-r lg:border-r-gray-200 rounded-xl lg:rounded-l-xl lg:rounded-r-none shrink-0 px-3 py-4 lg:p-7.5 bg-light-active dark:bg-coal-500 dark:lg:border-r-coal-100">
									<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
										General Pages
									</h3>
									<div class="menu menu-default menu-fit flex-col">
										<div class="menu-item">
											<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
												href="html/demo1/account/integrations.html">
												<span class="menu-icon">
													<i class="ki-filled ki-technology-2">
													</i>
												</span>
												<span class="menu-title grow-0">
													Integrations
												</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
												href="html/demo1/account/notifications.html">
												<span class="menu-icon">
													<i class="ki-filled ki-notification-1">
													</i>
												</span>
												<span class="menu-title grow-0">
													Notifications
												</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
												href="html/demo1/account/api-keys.html">
												<span class="menu-icon">
													<i class="ki-filled ki-key">
													</i>
												</span>
												<span class="menu-title grow-0">
													API Keys
												</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
												href="html/demo1/account/appearance.html">
												<span class="menu-icon">
													<i class="ki-filled ki-eye">
													</i>
												</span>
												<span class="menu-title grow-0">
													Appearance
												</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
												href="html/demo1/account/invite-a-friend.html">
												<span class="menu-icon">
													<i class="ki-filled ki-user-tick">
													</i>
												</span>
												<span class="menu-title grow-0">
													Invite a Friend
												</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
												href="html/demo1/account/activity.html">
												<span class="menu-icon">
													<i class="ki-filled ki-support">
													</i>
												</span>
												<span class="menu-title grow-0">
													Activity
												</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
												href="#">
												<span class="menu-icon">
													<i class="ki-filled ki-verify">
													</i>
												</span>
												<span class="menu-title grow-0">
													Brand
												</span>
												<span class="menu-badge">
													<span class="badge badge-xs">
														Soon
													</span>
												</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
												href="#">
												<span class="menu-icon">
													<i class="ki-filled ki-euro">
													</i>
												</span>
												<span class="menu-title grow-0">
													Get Paid
												</span>
												<span class="menu-badge">
													<span class="badge badge-xs">
														Soon
													</span>
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="pt-4 pb-2 lg:p-7.5 lg:pb-5 grow">
									<div class="grid lg:grid-cols-5 gap-5">
										<div class="flex flex-col">
											<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
												Account Home
											</h3>
											<div class="menu menu-default menu-fit flex-col">
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/home/get-started.html" tabindex="0">
														<span class="menu-title grow-0">
															Get Started
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/home/user-profile.html" tabindex="0">
														<span class="menu-title grow-0">
															User Profile
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/home/company-profile.html" tabindex="0">
														<span class="menu-title grow-0">
															Company Profile
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/home/settings-sidebar.html" tabindex="0">
														<span class="menu-title grow-0">
															With Sidebar
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/home/settings-enterprise.html" tabindex="0">
														<span class="menu-title grow-0">
															Enterprise
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/home/settings-plain.html" tabindex="0">
														<span class="menu-title grow-0">
															Plain
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/home/settings-modal.html" tabindex="0">
														<span class="menu-title grow-0">
															Modal
														</span>
													</a>
												</div>
											</div>
										</div>
										<div class="flex flex-col">
											<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
												Billing
											</h3>
											<div class="menu menu-default menu-fit flex-col">
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/billing/basic.html" tabindex="0">
														<span class="menu-title grow-0">
															Basic Billing
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/billing/enterprise.html" tabindex="0">
														<span class="menu-title grow-0">
															Enterprise
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/billing/plans.html" tabindex="0">
														<span class="menu-title grow-0">
															Plans
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/billing/history.html" tabindex="0">
														<span class="menu-title grow-0">
															Billing History
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="#" tabindex="0">
														<span class="menu-title grow-0">
															Tax Info
														</span>
														<span class="menu-badge">
															<span class="badge badge-xs">
																Soon
															</span>
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="#" tabindex="0">
														<span class="menu-title grow-0">
															Invoices
														</span>
														<span class="menu-badge">
															<span class="badge badge-xs">
																Soon
															</span>
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="#" tabindex="0">
														<span class="menu-title grow-0">
															Gateaways
														</span>
														<span class="menu-badge">
															<span class="badge badge-xs">
																Soon
															</span>
														</span>
													</a>
												</div>
											</div>
										</div>
										<div class="flex flex-col">
											<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
												Security
											</h3>
											<div class="menu menu-default menu-fit flex-col">
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/security/get-started.html" tabindex="0">
														<span class="menu-title grow-0">
															Get Started
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/security/overview.html" tabindex="0">
														<span class="menu-title grow-0">
															Security Overview
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/security/allowed-ip-addresses.html"
														tabindex="0">
														<span class="menu-title grow-0">
															IP Addresses
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/security/privacy-settings.html" tabindex="0">
														<span class="menu-title grow-0">
															Privacy Settings
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/security/device-management.html" tabindex="0">
														<span class="menu-title grow-0">
															Device Management
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/security/backup-and-recovery.html" tabindex="0">
														<span class="menu-title grow-0">
															Backup &amp; Recovery
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/security/current-sessions.html" tabindex="0">
														<span class="menu-title grow-0">
															Current Sessions
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/security/security-log.html" tabindex="0">
														<span class="menu-title grow-0">
															Security Log
														</span>
													</a>
												</div>
											</div>
										</div>
										<div class="flex flex-col">
											<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
												Members &amp; Roles
											</h3>
											<div class="menu menu-default menu-fit flex-col">
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/team-starter.html" tabindex="0">
														<span class="menu-title grow-0">
															Teams Starter
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/teams.html" tabindex="0">
														<span class="menu-title grow-0">
															Teams
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/team-info.html" tabindex="0">
														<span class="menu-title grow-0">
															Team Info
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/members-starter.html" tabindex="0">
														<span class="menu-title grow-0">
															Members Starter
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/team-members.html" tabindex="0">
														<span class="menu-title grow-0">
															Team Members
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/import-members.html" tabindex="0">
														<span class="menu-title grow-0">
															Import Members
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/roles.html" tabindex="0">
														<span class="menu-title grow-0">
															Roles
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/permissions-toggle.html" tabindex="0">
														<span class="menu-title grow-0">
															Persmissions - Toggler
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/permissions-check.html" tabindex="0">
														<span class="menu-title grow-0">
															Persmissions - Check
														</span>
													</a>
												</div>
											</div>
										</div>
										<div class="flex flex-col">
											<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
												Other Pages
											</h3>
											<div class="menu menu-default menu-fit flex-col">
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/integrations.html" tabindex="0">
														<span class="menu-title grow-0">
															Integrations
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/notifications.html" tabindex="0">
														<span class="menu-title grow-0">
															Notifications
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/api-keys.html" tabindex="0">
														<span class="menu-title grow-0">
															API Keys
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/appearance.html" tabindex="0">
														<span class="menu-title grow-0">
															Appearance
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/invite-a-friend.html" tabindex="0">
														<span class="menu-title grow-0">
															Invite a Friend
														</span>
													</a>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/activity.html" tabindex="0">
														<span class="menu-title grow-0">
															Activity
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="menu-item" data-menu-item-offset="-300px, 0" data-menu-item-overflow="true"
							data-menu-item-placement="bottom-start" data-menu-item-toggle="accordion|lg:dropdown"
							data-menu-item-trigger="click|lg:hover">
							<div
								class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
								<span class="menu-title text-nowrap">
									Network
								</span>
								<span class="menu-arrow flex lg:hidden">
									<i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
									</i>
									<i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
									</i>
								</span>
							</div>
							<div class="menu-dropdown flex-col gap-0 w-full lg:max-w-[670px]">
								<div class="flex flex-col lg:flex-row">
									<div
										class="flex flex-col gap-5 lg:w-[250px] mt-2 lg:mt-0 lg:border-r lg:border-r-gray-200 rounded-xl lg:rounded-none lg:rounded-tl-xl shrink-0 px-3 py-4 lg:p-7.5 bg-light-active dark:bg-coal-500 dark:lg:border-r-coal-100">
										<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 h-3.5">
											General Pages
										</h3>
										<div class="menu menu-default menu-fit flex-col">
											<div class="menu-item">
												<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
													href="#">
													<span class="menu-icon">
														<i class="ki-filled ki-flag">
														</i>
													</span>
													<span class="menu-title grow-0">
														Get Started
													</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
													href="#">
													<span class="menu-icon">
														<i class="ki-filled ki-users">
														</i>
													</span>
													<span class="menu-title grow-0">
														Colleagues
													</span>
													<span class="menu-badge">
														<span class="badge badge-xs">
															Soon
														</span>
													</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
													href="#">
													<span class="menu-icon">
														<i class="ki-filled ki-heart">
														</i>
													</span>
													<span class="menu-title grow-0">
														Donators
													</span>
													<span class="menu-badge">
														<span class="badge badge-xs">
															Soon
														</span>
													</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
													href="#">
													<span class="menu-icon">
														<i class="ki-filled ki-abstract-21">
														</i>
													</span>
													<span class="menu-title grow-0">
														Leads
													</span>
													<span class="menu-badge">
														<span class="badge badge-xs">
															Soon
														</span>
													</span>
												</a>
											</div>
										</div>
									</div>
									<div class="pt-4 pb-2 lg:p-7.5 lg:pb-5 grow">
										<div class="grid lg:grid-cols-2 gap-5">
											<div class="flex flex-col gap-5">
												<h3
													class="flex items-center gap-1.5 text-sm text-gray-800 font-semibold leading-none pl-2.5 h-3.5">
													User Cards
												</h3>
												<div class="menu menu-default menu-fit flex-col">
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-cards/mini-cards.html" tabindex="0">
															<span class="menu-title grow-0">
																Mini Cards
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-cards/author.html" tabindex="0">
															<span class="menu-title grow-0">
																Team Members
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-cards/nft.html" tabindex="0">
															<span class="menu-title grow-0">
																Authors
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-cards/social.html" tabindex="0">
															<span class="menu-title grow-0">
																NFT Users
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#" tabindex="0">
															<span class="menu-title grow-0">
																Social Users
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="#" tabindex="0">
															<span class="menu-title grow-0">
																Gamers
															</span>
															<span class="menu-badge">
																<span class="badge badge-xs">
																	Soon
																</span>
															</span>
														</a>
													</div>
												</div>
											</div>
											<div class="flex flex-col gap-5">
												<h3
													class="flex items-center gap-1.5 text-sm text-gray-800 font-semibold leading-none pl-2.5 h-3.5">
													User Base
													<span class="left-auto badge badge-xs badge-primary badge-outline">
														Datatables
													</span>
												</h3>
												<div class="menu menu-default menu-fit flex-col">
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-base/team-crew.html" tabindex="0">
															<span class="menu-title grow-0">
																Team Crew
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-base/app-roster.html" tabindex="0">
															<span class="menu-title grow-0">
																App Roster
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-base/market-authors.html" tabindex="0">
															<span class="menu-title grow-0">
																Market Authors
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-base/saas-users.html" tabindex="0">
															<span class="menu-title grow-0">
																SaaS Users
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-base/store-clients.html" tabindex="0">
															<span class="menu-title grow-0">
																Store Clients
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/network/user-base/visitors.html" tabindex="0">
															<span class="menu-title grow-0">
																Visitors
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div
									class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none bg-light-active dark:bg-coal-500 border border-gray-300 lg:border-0 lg:border-t lg:border-t-gray-300 dark:lg:border-t-gray-100 px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5">
									<div class="flex flex-col gap-1.5">
										<div class="text-md font-semibold text-gray-900 leading-none">
											Read to Get Started ?
										</div>
										<div class="text-2sm fomt-medium text-gray-600">
											Take your docs to the next level of Metronic
										</div>
									</div>
									<a class="btn btn-sm btn-dark" href="#">
										Read Documentation
									</a>
								</div>
							</div>
						</div>
						<div class="menu-item" data-menu-item-offset="-300px, 0" data-menu-item-overflow="true"
							data-menu-item-placement="bottom-start" data-menu-item-toggle="accordion|lg:dropdown"
							data-menu-item-trigger="click|lg:hover">
							<div
								class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
								<span class="menu-title text-nowrap">
									Authentication
								</span>
								<span class="menu-arrow flex lg:hidden">
									<i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
									</i>
									<i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
									</i>
								</span>
							</div>
							<div class="menu-dropdown flex-col gap-0 w-full lg:max-w-[670px]">
								<div class="flex flex-col lg:flex-row">
									<div class="pt-4 pb-2 lg:p-7.5 lg:pb-5 grow">
										<div class="grid lg:grid-cols-2 gap-5">
											<div class="flex flex-col">
												<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
													Classic Layout
												</h3>
												<div class="menu menu-default menu-fit flex-col">
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/authentication/classic/sign-in.html" tabindex="0">
															<span class="menu-title grow-0">
																Sign In
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/authentication/classic/sign-up.html" tabindex="0">
															<span class="menu-title grow-0">
																Sign Up
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/authentication/classic/2fa.html" tabindex="0">
															<span class="menu-title grow-0">
																2FA
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/authentication/classic/check-email.html" tabindex="0">
															<span class="menu-title grow-0">
																Check Email
															</span>
														</a>
													</div>
													<div class="menu-item pt-1">
														<span class="text-gray-600 font-medium text-2sm p-2.5">
															Reset Password
														</span>
													</div>
													<div class="menu-item">
														<a class="menu-link"
															href="html/demo1/authentication/classic/reset-password/enter-email.html" tabindex="0">
															<span class="menu-title grow-0">
																Enter Email
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link"
															href="html/demo1/authentication/classic/reset-password/check-email.html" tabindex="0">
															<span class="menu-title grow-0">
																Check Email
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link"
															href="html/demo1/authentication/classic/reset-password/change-password.html" tabindex="0">
															<span class="menu-title grow-0">
																Change Password
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link"
															href="html/demo1/authentication/classic/reset-password/password-changed.html"
															tabindex="0">
															<span class="menu-title grow-0">
																Password is Changed
															</span>
														</a>
													</div>
												</div>
											</div>
											<div class="flex flex-col">
												<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-2 lg:mb-5">
													Branded Layout
												</h3>
												<div class="menu menu-default menu-fit flex-col">
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/authentication/branded/sign-in.html" tabindex="0">
															<span class="menu-title grow-0">
																Sign In
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/authentication/branded/sign-up.html" tabindex="0">
															<span class="menu-title grow-0">
																Sign Up
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/authentication/branded/2fa.html" tabindex="0">
															<span class="menu-title grow-0">
																2FA
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link" href="html/demo1/authentication/branded/check-email.html" tabindex="0">
															<span class="menu-title grow-0">
																Check Email
															</span>
														</a>
													</div>
													<div class="menu-item pt-1">
														<span class="text-gray-600 font-medium text-2sm p-2.5">
															Reset Password
														</span>
													</div>
													<div class="menu-item">
														<a class="menu-link"
															href="html/demo1/authentication/branded/reset-password/enter-email.html" tabindex="0">
															<span class="menu-title grow-0">
																Enter Email
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link"
															href="html/demo1/authentication/branded/reset-password/check-email.html" tabindex="0">
															<span class="menu-title grow-0">
																Check Email
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link"
															href="html/demo1/authentication/branded/reset-password/change-password.html" tabindex="0">
															<span class="menu-title grow-0">
																Change Password
															</span>
														</a>
													</div>
													<div class="menu-item">
														<a class="menu-link"
															href="html/demo1/authentication/branded/reset-password/password-changed.html"
															tabindex="0">
															<span class="menu-title grow-0">
																Password is Changed
															</span>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div
										class="lg:w-[250px] mb-4 lg:mb-0 lg:border-l lg:border-l-gray-200 rounded-xl lg:rounded-r-xl lg:rounded-l-none shrink-0 px-3 py-4 lg:p-7.5 bg-light-active dark:bg-coal-500 dark:lg:border-l-coal-100">
										<h3 class="text-sm text-gray-800 font-semibold leading-none pl-2.5 mb-5">
											Other Pages
										</h3>
										<div class="menu menu-default menu-fit flex-col">
											<div class="menu-item">
												<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
													href="html/demo1/authentication/welcome-message.html">
													<span class="menu-icon">
														<i class="ki-filled ki-like-2">
														</i>
													</span>
													<span class="menu-title grow-0">
														Welcome Message
													</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
													href="html/demo1/authentication/account-deactivated.html">
													<span class="menu-icon">
														<i class="ki-filled ki-shield-cross">
														</i>
													</span>
													<span class="menu-title grow-0">
														Account Deactivated
													</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
													href="html/demo1/authentication/error-404.html">
													<span class="menu-icon">
														<i class="ki-filled ki-message-question">
														</i>
													</span>
													<span class="menu-title grow-0">
														Error 404
													</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link border border-transparent menu-link-hover:!bg-light menu-link-hover:border-gray-200 menu-item-active:!bg-light menu-item-active:border-gray-200 dark:menu-link-hover:!bg-coal-600 dark:menu-link-hover:border-gray-100 dark:menu-item-active:!bg-coal-600 dark:menu-item-active:border-gray-100"
													href="html/demo1/authentication/error-500.html">
													<span class="menu-icon">
														<i class="ki-filled ki-information">
														</i>
													</span>
													<span class="menu-title grow-0">
														Error 500
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div
									class="flex flex-wrap items-center lg:justify-between rounded-xl lg:rounded-t-none bg-light-active dark:bg-coal-500 border border-gray-300 lg:border-0 lg:border-t lg:border-t-gray-300 dark:lg:border-t-gray-100 px-4 py-4 lg:px-7.5 lg:py-5 gap-2.5">
									<div class="flex flex-col gap-1.5">
										<div class="text-md font-semibold text-gray-900 leading-none">
											Read to Get Started ?
										</div>
										<div class="text-2sm fomt-medium text-gray-600">
											Take your docs to the next level of Metronic
										</div>
									</div>
									<a class="btn btn-sm btn-dark" href="#">
										Read Documentation
									</a>
								</div>
							</div>
						</div>
						<div class="menu-item" data-menu-item-offset="0,0|lg:-20px, 0" data-menu-item-overflow="true"
							data-menu-item-placement="bottom-start" data-menu-item-toggle="dropdown"
							data-menu-item-trigger="click|lg:hover">
							<div
								class="menu-link text-sm text-gray-700 font-medium menu-link-hover:text-primary menu-item-active:text-gray-900 menu-item-show:text-primary menu-item-here:text-gray-900 menu-item-active:font-semibold menu-item-here:font-semibold">
								<span class="menu-title text-nowrap">
									Help
								</span>
								<span class="menu-arrow flex lg:hidden">
									<i class="ki-filled ki-plus text-2xs menu-item-show:hidden">
									</i>
									<i class="ki-filled ki-minus text-2xs hidden menu-item-show:inline-flex">
									</i>
								</span>
							</div>
							<div class="menu-dropdown menu-default py-2.5 w-full max-w-[220px]">
								<div class="menu-item">
									<a class="menu-link" href="https://keenthemes.com/metronic/tailwind/docs/getting-started/installation"
										tabindex="0">
										<span class="menu-icon">
											<i class="ki-filled ki-coffee">
											</i>
										</span>
										<span class="menu-title grow-0">
											Getting Started
										</span>
									</a>
								</div>
								<div class="menu-item" data-menu-item-placement="right-start" data-menu-item-toggle="dropdown"
									data-menu-item-trigger="click|lg:hover">
									<div class="menu-link">
										<span class="menu-icon">
											<i class="ki-filled ki-information">
											</i>
										</span>
										<span class="menu-title">
											Support Forum
										</span>
										<span class="menu-arrow">
											<i class="ki-filled ki-right text-3xs">
											</i>
										</span>
									</div>
									<div class="menu-dropdown menu-default w-full max-w-[175px] lg:max-w-[220px]">
										<div class="menu-item">
											<a class="menu-link" href="https://devs.keenthemes.com" tabindex="0">
												<span class="menu-icon">
													<i class="ki-filled ki-questionnaire-tablet">
													</i>
												</span>
												<span class="menu-title grow-0">
													All Questions
												</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="https://devs.keenthemes.com/popular" tabindex="0">
												<span class="menu-icon">
													<i class="ki-filled ki-star">
													</i>
												</span>
												<span class="menu-title grow-0">
													Popular Questions
												</span>
											</a>
										</div>
										<div class="menu-item">
											<a class="menu-link" href="https://devs.keenthemes.com/question/create" tabindex="0">
												<span class="menu-icon">
													<i class="ki-filled ki-message-question">
													</i>
												</span>
												<span class="menu-title grow-0">
													Ask Question
												</span>
											</a>
										</div>
									</div>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="https://keenthemes.com/metronic/tailwind/docs/getting-started/license"
										tabindex="0">
										<span class="menu-icon">
											<i class="ki-filled ki-subtitle">
											</i>
										</span>
										<span class="menu-title">
											Licenses &amp; FAQ
										</span>
										<span class="menu-badge" data-tooltip="#menu_tooltip_3">
											<i class="ki-filled ki-information-2 text-gray-500 text-md">
											</i>
										</span>
										<div class="tooltip" id="menu_tooltip_3">
											Learn more about licenses
										</div>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="https://keenthemes.com/metronic/tailwind/docs" tabindex="0">
										<span class="menu-icon">
											<i class="ki-filled ki-questionnaire-tablet">
											</i>
										</span>
										<span class="menu-title grow-0">
											Documentation
										</span>
									</a>
								</div>
								<div class="menu-separator">
								</div>
								<div class="menu-item">
									<a class="menu-link" href="https://keenthemes.com/contact" tabindex="0">
										<span class="menu-icon">
											<i class="ki-filled ki-share">
											</i>
										</span>
										<span class="menu-title grow-0">
											Contact Us
										</span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="flex items-center gap-2 lg:gap-3.5">
			<button
				class="btn btn-icon btn-icon-lg size-9 rounded-full hover:bg-primary-light hover:text-primary text-gray-500"
				data-modal-toggle="#search_modal">
				<i class="ki-filled ki-magnifier">
				</i>
			</button>
			<div class="dropdown" data-dropdown="true" data-dropdown-offset="170px, 10px" data-dropdown-placement="bottom-end"
				data-dropdown-trigger="click|lg:click">
				<button
					class="dropdown-toggle btn btn-icon btn-icon-lg size-9 rounded-full hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary text-gray-500">
					<i class="ki-filled ki-messages">
					</i>
				</button>
				<div class="dropdown-content light:border-gray-300 w-full max-w-[450px]">
					<div class="">
						<div class="flex items-center justify-between gap-2.5 text-sm text-gray-900 font-semibold px-5 py-2.5">
							Chat
							<button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-dropdown-dismiss="true">
								<i class="ki-filled ki-cross">
								</i>
							</button>
						</div>
						<div class="border-b border-b-gray-200">
						</div>
						<div class="shadow-card border-b border-gray-200 py-2.5">
							<div class="flex items-center justify-between flex-wrap gap-2 px-5">
								<div class="flex items-center flex-wrap gap-2">
									<div
										class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-11">
										<img alt="" class="size-7" src="assets/media/brand-logos/gitlab.svg" />
									</div>
									<div class="flex flex-col">
										<a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
											HR Team
										</a>
										<span class="text-2xs font-medium italic text-gray-500">
											Jessy is typing..
										</span>
									</div>
								</div>
								<div class="flex items-center gap-2.5">
									<div class="flex -space-x-2">
										<div class="flex">
											<img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
												src="assets/media/avatars/300-4.png" />
										</div>
										<div class="flex">
											<img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
												src="assets/media/avatars/300-1.png" />
										</div>
										<div class="flex">
											<img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-[30px]"
												src="assets/media/avatars/300-2.png" />
										</div>
										<div class="flex">
											<span
												class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-[30px] text-success-inverse size-6 ring-success-light bg-success">
												+10
											</span>
										</div>
									</div>
									<div class="menu" data-menu="true">
										<div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
											data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
											<button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
												<i class="ki-filled ki-dots-vertical">
												</i>
											</button>
											<div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/members/teams.html">
														<span class="menu-icon">
															<i class="ki-filled ki-users">
															</i>
														</span>
														<span class="menu-title">
															Invite Users
														</span>
													</a>
												</div>
												<div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start"
													data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
													<div class="menu-link">
														<span class="menu-icon">
															<i class="ki-filled ki-people">
															</i>
														</span>
														<span class="menu-title">
															Team
														</span>
														<span class="menu-arrow">
															<i class="ki-filled ki-right text-3xs">
															</i>
														</span>
													</div>
													<div class="menu-dropdown menu-default w-full max-w-[175px]">
														<div class="menu-item">
															<a class="menu-link" href="html/demo1/account/members/import-members.html">
																<span class="menu-icon">
																	<i class="ki-filled ki-shield-search">
																	</i>
																</span>
																<span class="menu-title">
																	Find Members
																</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="html/demo1/account/members/import-members.html">
																<span class="menu-icon">
																	<i class="ki-filled ki-calendar">
																	</i>
																</span>
																<span class="menu-title">
																	Meetings
																</span>
															</a>
														</div>
														<div class="menu-item">
															<a class="menu-link" href="html/demo1/account/members/import-members.html">
																<span class="menu-icon">
																	<i class="ki-filled ki-filter-edit">
																	</i>
																</span>
																<span class="menu-title">
																	Group Settings
																</span>
															</a>
														</div>
													</div>
												</div>
												<div class="menu-item">
													<a class="menu-link" href="html/demo1/account/security/privacy-settings.html">
														<span class="menu-icon">
															<i class="ki-filled ki-setting-3">
															</i>
														</span>
														<span class="menu-title">
															Settings
														</span>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
						data-scrollable-max-height="auto" data-scrollable-offset="280px">
						<div class="flex flex-col gap-5 py-5">
							<div class="flex items-end gap-3.5 px-5">
								<img alt="" class="rounded-full size-9" src="assets/media/avatars/300-5.png" />
								<div class="flex flex-col gap-1.5">
									<div class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
										<p class="text-2sm font-medium text-gray-700">
											Hello!
											<br />
											Next week we are closing the project. Do You have questions?
										</p>
									</div>
									<span class="text-2xs font-medium text-gray-500">
										14:04
									</span>
								</div>
							</div>
							<div class="flex items-end justify-end gap-3.5 px-5">
								<div class="flex flex-col gap-1.5">
									<div class="card shadow-none flex bg-primary flex-col gap-2.5 p-3 rounded-br-none">
										<p class="text-2sm font-medium text-light">
											This is excellent news!
										</p>
									</div>
									<div class="flex items-center justify-end relative">
										<span class="text-2xs font-medium text-gray-600 mr-6">
											14:08
										</span>
										<i class="ki-filled ki-double-check text-lg absolute text-success">
										</i>
									</div>
								</div>
								<div class="relative shrink-0">
									<img alt="" class="rounded-full size-9" src="assets/media/avatars/300-2.png" />
									<span
										class="size-[4.8px] badge badge-circle badge-success absolute top-7 end-0 transform -translate-y-1/2">
									</span>
								</div>
							</div>
							<div class="flex items-end gap-3.5 px-5">
								<img alt="" class="rounded-full size-9" src="assets/media/avatars/300-4.png" />
								<div class="flex flex-col gap-1.5">
									<div class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
										<p class="text-2sm font-medium text-gray-700">
											I have checked the features, can not wait to demo them!
										</p>
									</div>
									<span class="text-2xs font-medium text-gray-500">
										14:26
									</span>
								</div>
							</div>
							<div class="flex items-end gap-3.5 px-5">
								<img alt="" class="rounded-full size-9" src="assets/media/avatars/300-1.png" />
								<div class="flex flex-col gap-1.5">
									<div class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
										<p class="text-2sm font-medium text-gray-700">
											I have looked over the rollout plan, and everything seems spot on. I am ready on my end and can
											not wait for the user feedback.
										</p>
									</div>
									<span class="text-2xs font-medium text-gray-500">
										15:09
									</span>
								</div>
							</div>
							<div class="flex items-end justify-end gap-3.5 px-5">
								<div class="flex flex-col gap-1.5">
									<div class="card shadow-none flex bg-primary flex-col gap-2.5 p-3 rounded-br-none">
										<p class="text-2sm font-medium text-light">
											Haven't seen the build yet, I'll look now.
										</p>
									</div>
									<div class="flex items-center justify-end relative">
										<span class="text-2xs font-medium text-gray-600 mr-6">
											15:52
										</span>
										<i class="ki-filled ki-double-check text-lg absolute text-gray-400">
										</i>
									</div>
								</div>
								<div class="relative shrink-0">
									<img alt="" class="rounded-full size-9" src="assets/media/avatars/300-2.png" />
									<span
										class="size-[4.8px] badge badge-circle badge-success absolute top-7 end-0 transform -translate-y-1/2">
									</span>
								</div>
							</div>
							<div class="flex items-end justify-end gap-3.5 px-5">
								<div class="flex flex-col gap-1.5">
									<div class="card shadow-none flex bg-primary flex-col gap-2.5 p-3 rounded-br-none">
										<p class="text-2sm font-medium text-light">
											Checking the build now
										</p>
									</div>
									<div class="flex items-center justify-end relative">
										<span class="text-2xs font-medium text-gray-600 mr-6">
											15:52
										</span>
										<i class="ki-filled ki-double-check text-lg absolute text-gray-400">
										</i>
									</div>
								</div>
								<div class="relative shrink-0">
									<img alt="" class="rounded-full size-9" src="assets/media/avatars/300-2.png" />
									<span
										class="size-[4.8px] badge badge-circle badge-success absolute top-7 end-0 transform -translate-y-1/2">
									</span>
								</div>
							</div>
							<div class="flex items-end gap-3.5 px-5">
								<img alt="" class="rounded-full size-9" src="assets/media/avatars/300-4.png" />
								<div class="flex flex-col gap-1.5">
									<div class="card shadow-none flex flex-col bg-gray-100 gap-2.5 p-3 rounded-bl-none">
										<p class="text-2sm font-medium text-gray-700">
											Tomorrow, I will send the link for the meeting
										</p>
									</div>
									<span class="text-2xs font-medium text-gray-500">
										17:40
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="mb-2.5">
						<div class="flex grow gap-2 p-5 bg-gray-100 mb-2.5" id="join_request">
							<div class="relative shrink-0">
								<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-14.png" />
								<span
									class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
								</span>
							</div>
							<div class="flex items-center justify-between gap-3 grow">
								<div class="flex flex-col">
									<div class="text-2sm mb-px">
										<a class="hover:text-primary-active font-semibold text-gray-900" href="#">
											Jane Perez
										</a>
										<span class="text-gray-600">
											wants to join chat
										</span>
									</div>
									<span class="flex items-center text-2xs font-medium text-gray-500">
										1 day ago
										<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
										</span>
										Design Team
									</span>
								</div>
								<div class="flex gap-2.5">
									<button class="btn btn-light btn-xs" data-dismiss="#join_request">
										Decline
									</button>
									<button class="btn btn-dark btn-xs">
										Accept
									</button>
								</div>
							</div>
						</div>
						<div class="relative grow mx-5">
							<img alt="" class="rounded-full size-[30px] absolute left-0 top-2/4 -translate-y-2/4 ms-2.5"
								src="assets/media/avatars/300-2.png" />
							<input class="input h-auto py-4 ps-12 bg-transparent" placeholder="Write a message..." type="text"
								value="" />
							<div class="flex items-center gap-2.5 absolute right-3 top-1/2 -translate-y-1/2">
								<button class="btn btn-sm btn-icon btn-light btn-clear">
									<i class="ki-filled ki-exit-up">
									</i>
								</button>
								<a class="btn btn-dark btn-sm" href="#">
									Send
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="dropdown" data-dropdown="true" data-dropdown-offset="10px, 10px" data-dropdown-placement="bottom-end"
				data-dropdown-trigger="click|lg:click">
				<button
					class="dropdown-toggle btn btn-icon btn-icon-lg size-9 rounded-full hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary text-gray-500">
					<i class="ki-filled ki-element-11">
					</i>
				</button>
				<div class="dropdown-content light:border-gray-300 w-full max-w-[320px]">
					<div
						class="flex items-center justify-between gap-2.5 text-2xs text-gray-600 font-medium px-5 py-3 border-b border-b-gray-200">
						<span>
							Apps
						</span>
						<span>
							Enabled
						</span>
					</div>
					<div class="flex flex-col scrollable-y-auto max-h-[400px] divide-y divide-gray-200">
						<div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
							<div class="flex items-center flex-wrap gap-2">
								<div
									class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
									<img alt="" class="size-6" src="assets/media/brand-logos/jira.svg" />
								</div>
								<div class="flex flex-col">
									<a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
										Jira
									</a>
									<span class="text-2xs font-medium text-gray-600">
										Project management
									</span>
								</div>
							</div>
							<div class="flex items-center gap-2 lg:gap-5">
								<label class="switch switch-sm">
									<input type="checkbox" value="2" />
								</label>
							</div>
						</div>
						<div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
							<div class="flex items-center flex-wrap gap-2">
								<div
									class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
									<img alt="" class="size-6" src="assets/media/brand-logos/inferno.svg" />
								</div>
								<div class="flex flex-col">
									<a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
										Inferno
									</a>
									<span class="text-2xs font-medium text-gray-600">
										Ensures healthcare app
									</span>
								</div>
							</div>
							<div class="flex items-center gap-2 lg:gap-5">
								<label class="switch switch-sm">
									<input checked="" type="checkbox" value="1" />
								</label>
							</div>
						</div>
						<div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
							<div class="flex items-center flex-wrap gap-2">
								<div
									class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
									<img alt="" class="size-6" src="assets/media/brand-logos/evernote.svg" />
								</div>
								<div class="flex flex-col">
									<a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
										Evernote
									</a>
									<span class="text-2xs font-medium text-gray-600">
										Notes management app
									</span>
								</div>
							</div>
							<div class="flex items-center gap-2 lg:gap-5">
								<label class="switch switch-sm">
									<input checked="" type="checkbox" value="1" />
								</label>
							</div>
						</div>
						<div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
							<div class="flex items-center flex-wrap gap-2">
								<div
									class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
									<img alt="" class="size-6" src="assets/media/brand-logos/gitlab.svg" />
								</div>
								<div class="flex flex-col">
									<a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
										Gitlab
									</a>
									<span class="text-2xs font-medium text-gray-600">
										DevOps platform
									</span>
								</div>
							</div>
							<div class="flex items-center gap-2 lg:gap-5">
								<label class="switch switch-sm">
									<input type="checkbox" value="2" />
								</label>
							</div>
						</div>
						<div class="flex items-center justify-between flex-wrap gap-2 px-5 py-3.5">
							<div class="flex items-center flex-wrap gap-2">
								<div
									class="flex items-center justify-center shrink-0 rounded-full bg-gray-100 border border-gray-200 size-10">
									<img alt="" class="size-6" src="assets/media/brand-logos/google-webdev.svg" />
								</div>
								<div class="flex flex-col">
									<a class="text-2sm font-semibold text-gray-900 hover:text-primary-active" href="#">
										Google webdev
									</a>
									<span class="text-2xs font-medium text-gray-600">
										Building web expierences
									</span>
								</div>
							</div>
							<div class="flex items-center gap-2 lg:gap-5">
								<label class="switch switch-sm">
									<input checked="" type="checkbox" value="1" />
								</label>
							</div>
						</div>
					</div>
					<div class="grid p-5 border-t border-t-gray-200">
						<a class="btn btn-sm btn-light justify-center" href="html/demo1/account/api-keys.html">
							Go to Apps
						</a>
					</div>
				</div>
			</div>
			<div class="dropdown" data-dropdown="true" data-dropdown-offset="70px, 10px" data-dropdown-placement="bottom-end"
				data-dropdown-trigger="click|lg:click">
				<button
					class="dropdown-toggle btn btn-icon btn-icon-lg relative cursor-pointer size-9 rounded-full hover:bg-primary-light hover:text-primary dropdown-open:bg-primary-light dropdown-open:text-primary text-gray-500">
					<i class="ki-filled ki-notification-on">
					</i>
					<span class="badge badge-dot badge-success size-[5px] absolute top-0.5 right-0.5 transform translate-y-1/2">
					</span>
				</button>
				<div class="dropdown-content light:border-gray-300 w-full max-w-[460px]">
					<div class="flex items-center justify-between gap-2.5 text-sm text-gray-900 font-semibold px-5 py-2.5"
						id="notifications_header">
						Notifications
						<button class="btn btn-sm btn-icon btn-light btn-clear shrink-0" data-dropdown-dismiss="true">
							<i class="ki-filled ki-cross">
							</i>
						</button>
					</div>
					<div class="border-b border-b-gray-200">
					</div>
					<div class="tabs justify-between px-5 mb-2" data-tabs="true" id="notifications_tabs">
						<div class="flex items-center gap-5">
							<button class="tab active" data-tab-toggle="#notifications_tab_all">
								All
							</button>
							<button class="tab relative" data-tab-toggle="#notifications_tab_inbox">
								Inbox
								<span
									class="badge badge-dot badge-success size-[5px] absolute top-2 right-0 transform translate-y-1/2 translate-x-full">
								</span>
							</button>
							<button class="tab" data-tab-toggle="#notifications_tab_team">
								Team
							</button>
							<button class="tab" data-tab-toggle="#notifications_tab_following">
								Following
							</button>
						</div>
						<div class="menu" data-menu="true">
							<div class="menu-item" data-menu-item-offset="0, 10px" data-menu-item-placement="bottom-end"
								data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
								<button class="menu-toggle btn btn-sm btn-icon btn-light btn-clear">
									<i class="ki-filled ki-setting-2">
									</i>
								</button>
								<div class="menu-dropdown menu-default w-full max-w-[175px]" data-menu-dismiss="true">
									<div class="menu-item">
										<a class="menu-link" href="#">
											<span class="menu-icon">
												<i class="ki-filled ki-document">
												</i>
											</span>
											<span class="menu-title">
												View
											</span>
										</a>
									</div>
									<div class="menu-item" data-menu-item-offset="-15px, 0" data-menu-item-placement="right-start"
										data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
										<div class="menu-link">
											<span class="menu-icon">
												<i class="ki-filled ki-notification-status">
												</i>
											</span>
											<span class="menu-title">
												Export
											</span>
											<span class="menu-arrow">
												<i class="ki-filled ki-right text-3xs">
												</i>
											</span>
										</div>
										<div class="menu-dropdown menu-default w-full max-w-[175px]">
											<div class="menu-item">
												<a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
													<span class="menu-icon">
														<i class="ki-filled ki-sms">
														</i>
													</span>
													<span class="menu-title">
														Email
													</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
													<span class="menu-icon">
														<i class="ki-filled ki-message-notify">
														</i>
													</span>
													<span class="menu-title">
														SMS
													</span>
												</a>
											</div>
											<div class="menu-item">
												<a class="menu-link" href="html/demo1/account/home/settings-sidebar.html">
													<span class="menu-icon">
														<i class="ki-filled ki-notification-status">
														</i>
													</span>
													<span class="menu-title">
														Push
													</span>
												</a>
											</div>
										</div>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="#">
											<span class="menu-icon">
												<i class="ki-filled ki-pencil">
												</i>
											</span>
											<span class="menu-title">
												Edit
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="#">
											<span class="menu-icon">
												<i class="ki-filled ki-trash">
												</i>
											</span>
											<span class="menu-title">
												Delete
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="grow" id="notifications_tab_all">
						<div class="flex flex-col">
							<div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
								data-scrollable-max-height="auto" data-scrollable-offset="200px">
								<div class="flex flex-col gap-5 pt-3 pb-4 divider-y divider-gray-200">
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-4.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Joe Lincoln
													</a>
													<span class="text-gray-700">
														mentioned you in
													</span>
													<a class="hover:text-primary-active text-primary" href="#">
														Latest Trends
													</a>
													<span class="text-gray-700">
														topic
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													18 mins ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Web Design 2024
												</span>
											</div>
											<div class="card shadow-none flex flex-col gap-2.5 p-3.5 rounded-lg bg-light-active">
												<div class="text-2sm font-semibold text-gray-600 mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														&#64;Cody
													</a>
													<span class="text-gray-700 font-medium">
														For an expert opinion, check out what Mike has to say on this topic!
													</span>
												</div>
												<label class="input input-sm">
													<input placeholder="Reply" type="text" value="" />
													<button class="btn btn-icon">
														<i class="ki-filled ki-picture">
														</i>
													</button>
												</label>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-5.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Leslie Alexander
													</a>
													<span class="text-gray-700">
														added new tags to
													</span>
													<a class="hover:text-primary-active text-primary" href="#">
														Web Redesign 2024
													</a>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													53 mins ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													ACME
												</span>
											</div>
											<div class="flex flex-wrap gap-2.5">
												<span class="badge badge-sm badge-info badge-outline">
													Client-Request
												</span>
												<span class="badge badge-sm badge-warning badge-outline">
													Figma
												</span>
												<span class="badge badge-sm badge-light badge-outline">
													Redesign
												</span>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5" id="notification_request_3">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-27.png" />
											<span
												class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Guy Hawkins
													</a>
													<span class="text-gray-700">
														requested access to
													</span>
													<a class="hover:text-primary-active text-primary" href="#">
														AirSpace
													</a>
													<span class="text-gray-700">
														project
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													14 hours ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Dev Team
												</span>
											</div>
											<div class="flex flex-wrap gap-2.5">
												<button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
													Decline
												</button>
												<button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
													Accept
												</button>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-1.png" />
											<span
												class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5 grow">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Jane Perez
													</a>
													<span class="text-gray-700">
														invites you to review a file.
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													3 hours ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													742kb
												</span>
											</div>
											<div class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
												<img class="h-5" src="assets/media/file-types/pdf.svg" />
												<a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1" href="#">
													Launch_nov24.pptx
												</a>
												<span class="font-medium text-gray-500 text-2xs">
													Edited 39 mins ago
												</span>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-11.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-1">
											<div class="text-2sm font-medium mb-px">
												<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
													Raymond Pawell
												</a>
												<span class="text-gray-700">
													posted a new article
												</span>
												<a class="hover:text-primary-active text-primary" href="#">
													2024 Roadmap
												</a>
											</div>
											<span class="flex items-center text-2xs font-medium text-gray-500">
												1 hour ago
												<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
												</span>
												Roadmap
											</span>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-14.png" />
											<span
												class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5 grow">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Jane Perez
													</a>
													<span class="text-gray-700">
														wants to view your design project
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													3 day ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Metronic Launcher mockups
												</span>
											</div>
											<div class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
												<div
													class="flex items-center justify-center w-[26px] h-[30px] shrink-0 bg-light rounded border border-gray-200">
													<img class="h-5" src="assets/media/file-types/figma.svg" />
												</div>
												<a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1" href="#">
													Launcher-UIkit.fig
												</a>
												<span class="font-medium text-gray-500 text-2xs">
													Edited 2 mins ago
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="border-b border-b-gray-200">
							</div>
							<div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_all_footer">
								<button class="btn btn-sm btn-light justify-center">
									Archive all
								</button>
								<button class="btn btn-sm btn-light justify-center">
									Mark all as read
								</button>
							</div>
						</div>
					</div>
					<div class="grow hidden" id="notifications_tab_inbox">
						<div class="flex flex-col">
							<div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
								data-scrollable-max-height="auto" data-scrollable-offset="200px">
								<div class="flex flex-col gap-5 pt-3 pb-4">
									<div class="flex grow gap-2.5 px-5" id="notification_request_13">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-25.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5 grow">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Samuel Lee
													</a>
													<span class="text-gray-700">
														requested to add user to
													</span>
													<a class="hover:text-primary-active text-primary font-semibold" href="#">
														TechSynergy
													</a>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													22 hours ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Dev Team
												</span>
											</div>
											<div
												class="card shadow-none flex items-center flex-row justify-between gap-1.5 px-2.5 py-2 rounded-lg bg-light-active">
												<div class="flex flex-col">
													<a class="hover:text-primary-active font-medium text-gray-900 text-xs" href="#">
														Ronald Richards
													</a>
													<a class="hover:text-primary-active text-gray-500 font-medium text-3xs" href="#">
														ronald.richards&#64;gmail.com
													</a>
												</div>
												<a class="hover:text-primary-active text-gray-700 font-medium text-xs" href="#">
													Go to profile
												</a>
											</div>
											<div class="flex flex-wrap gap-2.5">
												<button class="btn btn-light btn-sm" data-dismiss="#notification_request_13">
													Decline
												</button>
												<button class="btn btn-dark btn-sm" data-dismiss="#notification_request_13">
													Accept
												</button>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex items-center grow gap-2.5 px-5">
										<div
											class="flex items-center justify-center size-8 bg-success-light rounded-full border border-success-clarity">
											<i class="ki-filled ki-check text-lg text-success">
											</i>
										</div>
										<div class="flex flex-col gap-1">
											<span class="text-2sm font-medium text-gray-700">
												You have succesfully verified your account
											</span>
											<span class="font-medium text-gray-500 text-2xs">
												2 days ago
											</span>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-34.png" />
											<span
												class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5 grow">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Ava Peterson
													</a>
													<span class="text-gray-700">
														uploaded attachment
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													3 days ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													ACME
												</span>
											</div>
											<div
												class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
												<div class="flex items-center gap-1.5">
													<img class="h-6" src="assets/media/file-types/xls.svg" />
													<div class="flex flex-col gap-0.5">
														<a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
															Redesign-2024.xls
														</a>
														<span class="font-medium text-gray-500 text-2xs">
															2.6 MB
														</span>
													</div>
												</div>
												<button class="btn btn-icon btn-xs btn-clear btn-light">
													<svg fill="none" height="14" viewbox="0 0 14 14" width="14"
														xmlns="http://www.w3.org/2000/svg">
														<path clip-rule="evenodd"
															d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
															fill="#99A1B7" fill-rule="evenodd">
														</path>
														<path clip-rule="evenodd"
															d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
															fill="#99A1B7" fill-rule="evenodd">
														</path>
														<path clip-rule="evenodd"
															d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
															fill="#99A1B7" fill-rule="evenodd">
														</path>
													</svg>
												</button>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-29.png" />
											<span
												class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3 grow">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Ethan Parker
													</a>
													<span class="text-gray-700">
														created a new tasks to
													</span>
													<a class="hover:text-primary-active text-primary" href="#">
														Site Sculpt
													</a>
													<span class="text-gray-700">
														project
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													3 days ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Web Designer
												</span>
											</div>
											<div class="card shadow-none p-3.5 gap-3.5 rounded-lg bg-light-active">
												<div class="flex items-center justify-between flex-wrap gap-2.5">
													<div class="flex flex-col gap-1">
														<span class="font-medium text-gray-900 text-xs">
															Location history is erased after Logging In
														</span>
														<span class="font-medium text-gray-500 text-3xs">
															Due Date: 15 May, 2024
														</span>
													</div>
													<div class="flex -space-x-2">
														<div class="flex">
															<img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
																src="assets/media/avatars/300-3.png" />
														</div>
														<div class="flex">
															<img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
																src="assets/media/avatars/300-2.png" />
														</div>
													</div>
												</div>
												<div class="flex items-center gap-2.5">
													<span class="badge badge-sm badge-success badge-outline">
														Improvement
													</span>
													<span class="badge badge-sm badge-danger badge-outline">
														Bug
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5" id="notification_request_3">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-30.png" />
											<span
												class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Benjamin Harris
													</a>
													<span class="text-gray-700">
														requested to upgrade plan
													</span>
													<a class="hover:text-primary-active text-primary" href="#">
													</a>
													<span class="text-gray-700">
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													4 days ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Marketing
												</span>
											</div>
											<div class="flex flex-wrap gap-2.5">
												<button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
													Decline
												</button>
												<button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
													Accept
												</button>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-24.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-1">
											<div class="text-2sm font-medium mb-px">
												<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
													Isaac Morgan
												</a>
												<span class="text-gray-700">
													mentioned you in
												</span>
												<a class="hover:text-primary-active text-primary" href="#">
													Data Transmission
												</a>
												topic
											</div>
											<span class="flex items-center text-2xs font-medium text-gray-500">
												6 days ago
												<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
												</span>
												Dev Team
											</span>
										</div>
									</div>
								</div>
							</div>
							<div class="border-b border-b-gray-200">
							</div>
							<div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_inbox_footer">
								<button class="btn btn-sm btn-light justify-center">
									Archive all
								</button>
								<button class="btn btn-sm btn-light justify-center">
									Mark all as read
								</button>
							</div>
						</div>
					</div>
					<div class="grow hidden" id="notifications_tab_team">
						<div class="flex flex-col">
							<div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
								data-scrollable-max-height="auto" data-scrollable-offset="200px">
								<div class="flex flex-col gap-5 pt-3 pb-4">
									<div class="flex grow gap-2 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-15.png" />
											<span
												class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3 grow" id="notification_request_10">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Nova Hawthorne
													</a>
													<span class="text-gray-700">
														sent you an meeting invation
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													2 days ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Dev Team
												</span>
											</div>
											<div class="card shadow-none p-2.5 rounded-lg bg-light-active">
												<div class="flex items-center justify-between flex-wrap gap-2.5">
													<div class="flex items-center gap-2.5">
														<div class="border border-brand-clarity rounded-lg">
															<div
																class="flex items-center justify-center border-b border-b-brand-clarity bg-brand-light rounded-t-lg">
																<span class="text-3xs text-brand fw-medium p-1.5">
																	Apr
																</span>
															</div>
															<div class="flex items-center justify-center size-9">
																<span class="fw-semibold text-gray-900 text-md tracking-tight">
																	12
																</span>
															</div>
														</div>
														<div class="flex flex-col gap-1.5">
															<a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
																Peparation For Release
															</a>
															<span class="font-medium text-gray-600 text-2xs">
																9:00 PM - 10:00 PM
															</span>
														</div>
													</div>
													<div class="flex -space-x-2">
														<div class="flex">
															<img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
																src="assets/media/avatars/300-4.png" />
														</div>
														<div class="flex">
															<img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
																src="assets/media/avatars/300-1.png" />
														</div>
														<div class="flex">
															<img class="hover:z-5 relative shrink-0 rounded-full ring-1 ring-light-light size-6"
																src="assets/media/avatars/300-2.png" />
														</div>
														<div class="flex">
															<span
																class="hover:z-5 relative inline-flex items-center justify-center shrink-0 rounded-full ring-1 font-semibold leading-none text-3xs size-6 text-success-inverse size-6 ring-success-light bg-success">
																+3
															</span>
														</div>
													</div>
												</div>
											</div>
											<div class="flex flex-wrap gap-2.5">
												<button class="btn btn-light btn-sm" data-dismiss="#notification_request_10">
													Decline
												</button>
												<button class="btn btn-dark btn-sm" data-dismiss="#notification_request_10">
													Accept
												</button>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-6.png" />
											<span
												class="size-1.5 badge badge-circle absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-1">
											<div class="text-2sm font-medium mb-px">
												<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
													Adrian Vale
												</a>
												<span class="text-gray-700">
													change the due date of
												</span>
												<a class="hover:text-primary-active text-primary" href="#">
													Marketing
												</a>
												to 13 May
											</div>
											<span class="flex items-center text-2xs font-medium text-gray-500">
												2 days ago
												<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
												</span>
												Marketing
											</span>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-12.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5 grow">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Skylar Frost
													</a>
													<span class="text-gray-700">
														uploaded 2 attachments
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													3 days ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Web Design
												</span>
											</div>
											<div
												class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
												<div class="flex items-center gap-1.5">
													<img class="h-6" src="assets/media/file-types/word.svg" />
													<div class="flex flex-col gap-0.5">
														<a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
															Landing-page.docx
														</a>
														<span class="font-medium text-gray-500 text-2xs">
															1.9 MB
														</span>
													</div>
												</div>
												<button class="btn btn-icon btn-xs btn-clear btn-light">
													<svg fill="none" height="14" viewbox="0 0 14 14" width="14"
														xmlns="http://www.w3.org/2000/svg">
														<path clip-rule="evenodd"
															d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
															fill="#99A1B7" fill-rule="evenodd">
														</path>
														<path clip-rule="evenodd"
															d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
															fill="#99A1B7" fill-rule="evenodd">
														</path>
														<path clip-rule="evenodd"
															d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
															fill="#99A1B7" fill-rule="evenodd">
														</path>
													</svg>
												</button>
											</div>
											<div
												class="card shadow-none flex items-center justify-between flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
												<div class="flex items-center gap-1.5">
													<img class="h-6" src="assets/media/file-types/svg.svg" />
													<div class="flex flex-col gap-0.5">
														<a class="hover:text-primary-active font-medium text-gray-700 text-xs" href="#">
															New-icon.svg
														</a>
														<span class="font-medium text-gray-500 text-2xs">
															2.3 MB
														</span>
													</div>
												</div>
												<button class="btn btn-icon btn-xs btn-clear btn-light">
													<svg fill="none" height="14" viewbox="0 0 14 14" width="14"
														xmlns="http://www.w3.org/2000/svg">
														<path clip-rule="evenodd"
															d="M6.63821 2.60467C4.81926 2.60467 3.32474 3.99623 3.16201 5.77252C3.1386 6.02803 2.92413 6.22253 2.66871 6.22227C1.74915 6.22149 0.976744 6.9868 0.976744 7.90442C0.976744 8.83344 1.72988 9.58657 2.65891 9.58657H3.09302C3.36274 9.58657 3.5814 9.80523 3.5814 10.0749C3.5814 10.3447 3.36274 10.5633 3.09302 10.5633H2.65891C1.19044 10.5633 0 9.37292 0 7.90442C0 6.58614 0.986948 5.48438 2.24496 5.27965C2.62863 3.20165 4.44941 1.62793 6.63821 1.62793C8.26781 1.62793 9.69282 2.50042 10.4729 3.80193C12.3411 3.72829 14 5.2564 14 7.18091C14 8.93508 12.665 10.3769 10.9552 10.5466C10.6868 10.5733 10.4476 10.3773 10.421 10.1089C10.3943 9.84052 10.5903 9.60135 10.8587 9.57465C12.0739 9.45406 13.0233 8.42802 13.0233 7.18091C13.0233 5.74002 11.6905 4.59666 10.2728 4.79968C10.0642 4.82957 9.85672 4.72382 9.76028 4.53181C9.18608 3.38796 8.00318 2.60467 6.63821 2.60467Z"
															fill="#99A1B7" fill-rule="evenodd">
														</path>
														<path clip-rule="evenodd"
															d="M6.99909 8.01611L8.28162 9.29864C8.47235 9.48937 8.78158 9.48937 8.97231 9.29864C9.16303 9.10792 9.16303 8.79874 8.97231 8.60802L7.57465 7.2103C7.25675 6.89247 6.74143 6.89247 6.42353 7.2103L5.02585 8.60802C4.83513 8.79874 4.83513 9.10792 5.02585 9.29864C5.21657 9.48937 5.5258 9.48937 5.71649 9.29864L6.99909 8.01611Z"
															fill="#99A1B7" fill-rule="evenodd">
														</path>
														<path clip-rule="evenodd"
															d="M7.00009 12.372C7.2698 12.372 7.48846 12.1533 7.48846 11.8836V7.97665C7.48846 7.70694 7.2698 7.48828 7.00009 7.48828C6.73038 7.48828 6.51172 7.70694 6.51172 7.97665V11.8836C6.51172 12.1533 6.73038 12.372 7.00009 12.372Z"
															fill="#99A1B7" fill-rule="evenodd">
														</path>
													</svg>
												</button>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-21.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Selene Silverleaf
													</a>
													<span class="text-gray-700">
														commented on
													</span>
													<a class="hover:text-primary-active text-primary" href="#">
														SiteSculpt
													</a>
													<span class="text-gray-700">
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													4 days ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Manager
												</span>
											</div>
											<div class="card shadow-none flex flex-col gap-2.5 p-3.5 rounded-lg bg-light-active">
												<div class="text-2sm font-semibold text-gray-600 mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														&#64;Cody
													</a>
													<span class="text-gray-700 font-medium">
														This design is simply stunning! From layout to color, it's a work of art!
													</span>
												</div>
												<label class="input input-sm">
													<input placeholder="Reply" type="text" value="" />
													<button class="btn btn-icon">
														<i class="ki-filled ki-picture">
														</i>
													</button>
												</label>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5" id="notification_request_3">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-13.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Thalia Fox
													</a>
													<span class="text-gray-700">
														has invited you to join
													</span>
													<a class="hover:text-primary-active text-primary" href="#">
														Design Research
													</a>
													<span class="text-gray-700">
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													4 days ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Dev Team
												</span>
											</div>
											<div class="flex flex-wrap gap-2.5">
												<button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
													Decline
												</button>
												<button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
													Accept
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="border-b border-b-gray-200">
							</div>
							<div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_team_footer">
								<button class="btn btn-sm btn-light justify-center">
									Archive all
								</button>
								<button class="btn btn-sm btn-light justify-center">
									Mark all as read
								</button>
							</div>
						</div>
					</div>
					<div class="grow hidden" id="notifications_tab_following">
						<div class="flex flex-col">
							<div class="scrollable-y-auto" data-scrollable="true" data-scrollable-dependencies="#header"
								data-scrollable-max-height="auto" data-scrollable-offset="200px">
								<div class="flex flex-col gap-5 pt-3 pb-4">
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-1.png" />
											<span
												class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-2.5 grow">
											<div class="flex flex-col gap-1 mb-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Jane Perez
													</a>
													<span class="text-gray-700">
														added 2 new works to
													</span>
													<a class="hover:text-primary-active text-primary font-semibold" href="#">
														Inspirations 2024
													</a>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													23 hours ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Craftwork Design
												</span>
											</div>
											<div class="flex items-center gap-2.5">
												<div class="card shadow-none flex flex-col gap-3.5 bg-light-active w-40">
													<div class="bg-cover bg-no-repeat card-rounded-t shrink-0 h-24"
														style="background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/600x600/6.jpg')">
													</div>
													<div class="px-2.5 pb-2">
														<a class="font-medium block text-gray-700 hover:text-primary text-xs leading-4 mb-0.5"
															href="#">
															Geometric Patterns
														</a>
														<div class="text-2xs font-medium text-gray-500">
															Token ID:
															<span class="text-2xs font-medium text-gray-700">
																81023
															</span>
														</div>
													</div>
												</div>
												<div class="card shadow-none flex flex-col gap-3.5 bg-light-active w-40">
													<div class="bg-cover bg-no-repeat card-rounded-t shrink-0 h-24"
														style="background-image: url('/static/metronic-tailwind-html/dist/assets/media/images/600x600/1.jpg')">
													</div>
													<div class="px-2.5 pb-2">
														<a class="font-medium block text-gray-700 hover:text-primary text-xs leading-4 mb-0.5"
															href="#">
															Artistic Expressions
														</a>
														<div class="text-2xs font-medium text-gray-500">
															Token ID:
															<span class="text-2xs font-medium text-gray-700">
																67890
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5" id="notification_request_3">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-19.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-2.5 grow" id="notification_request_17">
											<div class="flex flex-col gap-1 mb-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Natalie Wood
													</a>
													<span class="text-gray-700">
														wants to edit marketing project
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													1 day ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Designer
												</span>
											</div>
											<div class="card shadow-none flex items-center flex-row gap-1.5 p-2.5 rounded-lg bg-light-active">
												<div
													class="flex items-center justify-center w-[26px] h-[30px] shrink-0 bg-white rounded border border-gray-200">
													<img class="h-5" src="assets/media/brand-logos/jira.svg" />
												</div>
												<a class="hover:text-primary-active font-medium text-gray-700 text-xs me-1" href="#">
													User-feedback.jira
												</a>
												<span class="font-medium text-gray-500 text-2xs">
													Edited 1 hour ago
												</span>
											</div>
											<div class="flex flex-wrap gap-2.5">
												<button class="btn btn-light btn-sm" data-dismiss="#notification_request_17">
													Decline
												</button>
												<button class="btn btn-dark btn-sm" data-dismiss="#notification_request_17">
													Accept
												</button>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-17.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-2.5 grow">
											<div class="flex flex-col gap-1 mb-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Aaron Foster
													</a>
													<span class="text-gray-700">
														requested to view
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													3 day ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Larsen Ltd
												</span>
											</div>
											<div
												class="card shadow-none flex items-center flex-row gap-1.5 px-2.5 py-1.5 rounded-lg bg-light-active">
												<i class="ki-filled ki-user-tick text-success text-base">
												</i>
												<span class="font-medium text-success text-2sm">
													You allowed Aaron to view
												</span>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-34.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-1">
											<div class="text-2sm font-medium mb-px">
												<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
													Chloe Morgan
												</a>
												<span class="text-gray-700">
													posted a new article
												</span>
												<a class="hover:text-primary-active text-primary" href="#">
													User Experience
												</a>
											</div>
											<span class="flex items-center text-2xs font-medium text-gray-500">
												1 day ago
												<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
												</span>
												Nexus
											</span>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-9.png" />
											<span
												class="size-1.5 badge badge-circle bg-gray-400 absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-2.5 grow">
											<div class="flex flex-col gap-1 mb-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Gabriel Bennett
													</a>
													<span class="text-gray-700">
														started connect you
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													3 day ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Development
												</span>
											</div>
											<div class="flex flex-wrap gap-2.5">
												<button class="btn btn-sm btn-light">
													<i class="ki-filled ki-check-circle">
													</i>
													Connected
												</button>
												<button class="btn btn-dark btn-sm">
													Go to profile
												</button>
											</div>
										</div>
									</div>
									<div class="border-b border-b-gray-200">
									</div>
									<div class="flex grow gap-2.5 px-5" id="notification_request_3">
										<div class="relative shrink-0 mt-0.5">
											<img alt="" class="rounded-full size-8" src="assets/media/avatars/300-13.png" />
											<span
												class="size-1.5 badge badge-circle badge-success absolute top-7 end-0.5 ring-1 ring-light transform -translate-y-1/2">
											</span>
										</div>
										<div class="flex flex-col gap-3.5">
											<div class="flex flex-col gap-1">
												<div class="text-2sm font-medium mb-px">
													<a class="hover:text-primary-active text-gray-900 font-semibold" href="#">
														Thalia Fox
													</a>
													<span class="text-gray-700">
														has invited you to join
													</span>
													<a class="hover:text-primary-active text-primary" href="#">
														Design Research
													</a>
													<span class="text-gray-700">
													</span>
												</div>
												<span class="flex items-center text-2xs font-medium text-gray-500">
													4 days ago
													<span class="badge badge-circle bg-gray-500 size-1 mx-1.5">
													</span>
													Dev Team
												</span>
											</div>
											<div class="flex flex-wrap gap-2.5">
												<button class="btn btn-light btn-sm" data-dismiss="#notification_request_3">
													Decline
												</button>
												<button class="btn btn-dark btn-sm" data-dismiss="#notification_request_3">
													Accept
												</button>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="border-b border-b-gray-200">
							</div>
							<div class="grid grid-cols-2 p-5 gap-2.5" id="notifications_following_footer">
								<button class="btn btn-sm btn-light justify-center">
									Archive all
								</button>
								<button class="btn btn-sm btn-light justify-center">
									Mark all as read
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="menu" data-menu="true">
				<div class="menu-item" data-menu-item-offset="20px, 10px" data-menu-item-placement="bottom-end"
					data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:click">
					<div class="menu-toggle btn btn-icon rounded-full">
						<img alt="" class="size-9 rounded-full border-2 border-success shrink-0"
							src="assets/media/avatars/300-2.png" />
					</div>
					<div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[250px]">
						<div class="flex items-center justify-between px-5 py-1.5 gap-1.5">
							<div class="flex items-center gap-2">
								<img alt="" class="size-9 rounded-full border-2 border-success" src="assets/media/avatars/300-2.png" />
								<div class="flex flex-col gap-1.5">
									<span class="text-sm text-gray-800 font-semibold leading-none">
										Cody Fisher
									</span>
									<a class="text-xs text-gray-600 hover:text-primary font-medium leading-none"
										href="html/demo1/account/home/get-started.html">
										c.fisher&#64;gmail.com
									</a>
								</div>
							</div>
							<span class="badge badge-xs badge-primary badge-outline">
								Pro
							</span>
						</div>
						<div class="menu-separator">
						</div>
						<div class="flex flex-col" data-menu-dismiss="true">
							<div class="menu-item">
								<a class="menu-link" href="html/demo1/public-profile/profiles/default.html">
									<span class="menu-icon">
										<i class="ki-filled ki-badge">
										</i>
									</span>
									<span class="menu-title">
										Public Profile
									</span>
								</a>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="html/demo1/account/home/user-profile.html">
									<span class="menu-icon">
										<i class="ki-filled ki-profile-circle">
										</i>
									</span>
									<span class="menu-title">
										My Profile
									</span>
								</a>
							</div>
							<div class="menu-item" data-menu-item-offset="-50px, 0" data-menu-item-placement="left-start"
								data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
								<div class="menu-link">
									<span class="menu-icon">
										<i class="ki-filled ki-setting-2">
										</i>
									</span>
									<span class="menu-title">
										My Account
									</span>
									<span class="menu-arrow">
										<i class="ki-filled ki-right text-3xs">
										</i>
									</span>
								</div>
								<div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[220px]">
									<div class="menu-item">
										<a class="menu-link" href="html/demo1/account/home/get-started.html">
											<span class="menu-icon">
												<i class="ki-filled ki-coffee">
												</i>
											</span>
											<span class="menu-title">
												Get Started
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="html/demo1/account/home/user-profile.html">
											<span class="menu-icon">
												<i class="ki-filled ki-some-files">
												</i>
											</span>
											<span class="menu-title">
												My Profile
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="#">
											<span class="menu-icon">
												<i class="ki-filled ki-icon">
												</i>
											</span>
											<span class="menu-title">
												Billing
											</span>
											<span class="menu-badge" data-tooltip="true" data-tooltip-placement="top">
												<i class="ki-filled ki-information-2 text-md text-gray-500">
												</i>
												<span class="tooltip" data-tooltip-content="true">
													Payment and subscription info
												</span>
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="html/demo1/account/security/overview.html">
											<span class="menu-icon">
												<i class="ki-filled ki-medal-star">
												</i>
											</span>
											<span class="menu-title">
												Security
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="html/demo1/account/members/teams.html">
											<span class="menu-icon">
												<i class="ki-filled ki-setting">
												</i>
											</span>
											<span class="menu-title">
												Members &amp; Roles
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link" href="html/demo1/account/integrations.html">
											<span class="menu-icon">
												<i class="ki-filled ki-switch">
												</i>
											</span>
											<span class="menu-title">
												Integrations
											</span>
										</a>
									</div>
									<div class="menu-separator">
									</div>
									<div class="menu-item">
										<a class="menu-link" href="html/demo1/account/security/overview.html">
											<span class="menu-icon">
												<i class="ki-filled ki-shield-tick">
												</i>
											</span>
											<span class="menu-title">
												Notifications
											</span>
											<label class="switch switch-sm">
												<input checked="" name="check" type="checkbox" value="1" />
											</label>
										</a>
									</div>
								</div>
							</div>
							<div class="menu-item">
								<a class="menu-link" href="https://devs.keenthemes.com">
									<span class="menu-icon">
										<i class="ki-filled ki-message-programming">
										</i>
									</span>
									<span class="menu-title">
										Dev Forum
									</span>
								</a>
							</div>
							<div class="menu-item" data-menu-item-offset="-10px, 0" data-menu-item-placement="left-start"
								data-menu-item-toggle="dropdown" data-menu-item-trigger="click|lg:hover">
								<div class="menu-link">
									<span class="menu-icon">
										<i class="ki-filled ki-icon">
										</i>
									</span>
									<span class="menu-title">
										Language
									</span>
									<div
										class="flex items-center gap-1.5 rounded-md border border-gray-300 text-gray-600 p-1.5 text-2xs font-medium shrink-0">
										English
										<img alt="" class="inline-block size-3.5 rounded-full" src="assets/media/flags/united-states.svg" />
									</div>
								</div>
								<div class="menu-dropdown menu-default light:border-gray-300 w-full max-w-[170px]">
									<div class="menu-item active">
										<a class="menu-link h-10" href="#">
											<span class="menu-icon">
												<img alt="" class="inline-block size-4 rounded-full"
													src="assets/media/flags/united-states.svg" />
											</span>
											<span class="menu-title">
												English
											</span>
											<span class="menu-badge">
												<i class="ki-solid ki-check-circle text-success text-base">
												</i>
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link h-10" href="#">
											<span class="menu-icon">
												<img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/spain.svg" />
											</span>
											<span class="menu-title">
												Spanish
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link h-10" href="#">
											<span class="menu-icon">
												<img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/germany.svg" />
											</span>
											<span class="menu-title">
												German
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link h-10" href="#">
											<span class="menu-icon">
												<img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/japan.svg" />
											</span>
											<span class="menu-title">
												Japanese
											</span>
										</a>
									</div>
									<div class="menu-item">
										<a class="menu-link h-10" href="#">
											<span class="menu-icon">
												<img alt="" class="inline-block size-4 rounded-full" src="assets/media/flags/france.svg" />
											</span>
											<span class="menu-title">
												French
											</span>
										</a>
									</div>
								</div>
							</div>
						</div>
						<div class="menu-separator">
						</div>
						<div class="flex flex-col">
							<div class="menu-item mb-0.5">
								<div class="menu-link">
									<span class="menu-icon">
										<i class="ki-filled ki-moon">
										</i>
									</span>
									<span class="menu-title">
										Dark Mode
									</span>
									<label class="switch switch-sm">
										<input data-theme-state="dark" data-theme-toggle="true" name="check" type="checkbox" value="1" />
									</label>
								</div>
							</div>
							<div class="menu-item px-4 py-1.5">
								<a class="btn btn-sm btn-light justify-center" href="html/demo1/authentication/classic/sign-in.html">
									Log out
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end: container -->
</header>