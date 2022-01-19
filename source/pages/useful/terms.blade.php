@extends('_layouts.master')

@section('body')

	<!-- Breadcrumbs !-->
	@component('_layouts.partials.breadcrumb')
		@slot('breadcrumb')
			Terms of Service
		@endslot
	@endcomponent
	<!-- // Breadcrumbs !-->

	<!-- Terms -->
	<div class="flex-wrap mt-4 text-sm">

		<!-- 1. Terms !-->
		<div class="flex flex-col mb-6">
			<h3 class="text-lg font-bold mb-2">
				1. Terms
			</h3>
			<p class="flex">
				By accessing the website at {{ $page->siteName }},
				you are agreeing to be bound by these terms of service, all applicable laws and regulations,
				and agree that you are responsible for compliance with any applicable local laws.
				If you do not agree with any of these terms, you are prohibited from using or accessing this site.
				The materials contained in this website are protected by applicable copyright and trademark law.
			</p>
		</div>
		<!-- // 1. Terms !-->

		<!-- 2. Disclaimer !-->
		<div class="flex flex-col mb-6">
			<h3 class="text-lg font-bold mb-2">
				2. Disclaimer
			</h3>
			<p class="flex">
				The materials on Chattie's website are provided on an 'as is' basis. Chattie makes no
				warranties, expressed or implied, and hereby disclaims and negates all other warranties
				including, without limitation, implied warranties or conditions of merchantability, fitness for
				a particular purpose, or non-infringement of intellectual property or other violation of rights.
			</p>
			<p class="flex">
				Further, Chattie does not warrant or make any representations concerning the accuracy, likely
				results, or reliability of the use of the materials on its website or otherwise relating to such
				materials or on any sites linked to this site.
			</p>
		</div>
		<!-- // 2. Disclaimer !-->

		<!-- 3. Limitations !-->
		<div class="flex flex-col mb-6">
			<h3 class="text-lg font-bold mb-2">
				3. Limitations
			</h3>
			<p class="flex">
				In no event shall Chattie or its suppliers be liable for any damages (including, without limitation,
				damages for loss of data or profit, or due to business interruption) arising out of the use or
				inability to use the materials on Chattie's website, even if Chattie or a Chattie authorized
				representative has been notified orally or in writing of the possibility of such damage. Because some
				jurisdictions do not allow limitations on implied warranties, or limitations of liability for
				consequential or incidental damages, these limitations may not apply to you.
			</p>
		</div>
		<!-- // 3. Limitations !-->

		<!-- 4. Accuracy of materials !-->
		<div class="flex flex-col mb-6">
			<h3 class="text-lg font-bold mb-2">
				4. Accuracy of materials
			</h3>
			<p class="flex">
				The materials appearing on Chattie's website could include technical, typographical, or photographic
				errors. Chattie does not warrant that any of the materials on its website are accurate, complete or
				current. Chattie may make changes to the materials contained on its website at any time without
				notice. However Chattie does not make any commitment to update the materials.
			</p>
		</div>
		<!-- // 4. Accuracy of materials !-->

		<!-- 5. Links !-->
		<div class="flex flex-col mb-6">
			<h3 class="text-lg font-bold mb-2">
				5. Links
			</h3>
			<p class="flex">
				Chattie has not reviewed all of the sites linked to its website and is not responsible for the
				contents of any such linked site. The inclusion of any link does not imply endorsement by Chattie of
				the site. Use of any such linked website is at the user's own risk.
			</p>
		</div>
		<!-- // 5. Links !-->

		<!-- 6. Modifications !-->
		<div class="flex flex-col mb-6">
			<h3 class="text-lg font-bold mb-2">6. Modifications</h3>
			<p class="flex">
				Chattie may revise these terms of service for its website at any time without notice. By using this
				website you are agreeing to be bound by the then current version of these terms of service.
			</p>
		</div>
		<!-- // 6. Modifications !-->

		<!-- 7. Governing Law !-->
		<div class="flex flex-col mb-6">
			<h3 class="text-lg font-bold mb-2">7. Governing Law</h3>
			<p class="flex">
				These terms and conditions are governed by and construed in accordance with the laws of London and
			   you irrevocably submit to the exclusive jurisdiction of the courts in that State or location.
			</p>
		</div>
		<!-- // 7. Governing Law !-->

	</div>
	<!-- // Terms !-->
@stop