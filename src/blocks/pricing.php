<?php

?>

<div class="section bg-s200" style="margin-top: -3rem;">
	<div class="pricing pricing-single-user pure-g">

		<div class="pure-u-1-1 text-center">
			<h3 style="margin-top: 2rem;">Användarlicenser</h3>
		</div>

		<div class="pure-u-1-1 text-center show prn-hide-sm">
			<div class="switch">
				<div class="switch-option pricing-single-user-switch " onClick="pricingFor(1);">
					Enanvändarlicens
				</div>
				<div class="switch-option pricing-multi-user-switch" onClick="pricingFor(0);">
					Fleranvändarlicens
				</div>
			</div>
		</div>

		<div class="pricing-column l-box pure-u-1-1 pure-u-sm-1-3">
			<div class="paper">
				<h3>Standard</h3>
				<p class="text-muted pricing-single-user-price">
					<span>395 kr</span> anv/mån
				</p>
				<p class="text-muted pricing-multi-user-price">
					<span>795 kr</span> anv/mån
				</p>
				<p class="text-small">Standardlicenserna är giltiga för samtliga användare oavsett användningsområde, journalföringsplikt, etc.</p>
			</div>
		</div>

		<div class="pricing-column l-box pure-u-1-1 pure-u-sm-1-3">
			<div class="paper">
				<h3>EHT</h3>
				<p class="text-muted pricing-single-user-price">
					<span>195 kr</span> anv/mån
				</p>
				<p class="text-muted pricing-multi-user-price">
					<span>395 kr</span> anv/mån
				</p>
				<p class="text-small">EHT-licenser får bara användas till icke-medicinsk personal som är kopplad till ett elevhälsoteam för en skola.</p>
			</div>
		</div>

		<div class="pricing-column l-box pure-u-1-1 pure-u-sm-1-3">
			<div class="paper">
				<h3>Pedagog</h3>
				<p class="text-muted pricing-single-user-price">
					<span>-</span>
				</p>
				<p class="text-muted pricing-multi-user-price">
					<span>195 kr</span> anv/mån
				</p>
				<p class="text-small">Pedagogisk licens ger bara tillgång till Lorem ipsum dolor sit amet och finns bara som fleranvändarlicens.</p>
			</div>
		</div>

		<div class="pure-u-1-1 text-center">
			<div class="switch">
				<div class="switch-option pricing-single-user-switch " onClick="pricingFor(1);">
					Enanvändarlicens
				</div>
				<div class="switch-option pricing-multi-user-switch" onClick="pricingFor(0);">
					Fleranvändarlicens
				</div>
			</div>
		</div>

		<div class="pure-u-1-1">
			<p class="pricing-single-user-license">
				<strong>Enanvändarlicenser</strong> kan bara vara kopplade till ett användarkonto, det innebär att varje aktivt användarkonto som ska använda sig av enanvändarlicenser medför en licenskostnad per månad. Vi rekommenderar att denna licensform används för användare som arbetar i systemet flera gånger i veckan eller oftare.
			</p>
			<p class="pricing-multi-user-license">
				<strong>Fleranvändarlicenser</strong> är inte knutna till en specifik användare utan kan delas mellan hur många användare som helst, dock kan bara av en användare i taget vara inloggad. När en användare loggar in så knyts en av organisationens fleranvändarlicenser tillfälligt till kontot och lämnas tillbaka när användaren loggar ut igen. Det främsta användningsområdet är när en organisation har många sällananvändare som använder systemet en eller ett par gånger i veckan eller mer sällan.
			</p>
			<p>
				Det går att blanda licensformer vid behov.
			</p>
		</div>

	</div>
</div>

<script>
	pricingFor = function(val) {
		if (val) {
			document.querySelector('.pricing').classList.add('pricing-single-user');
			document.querySelector('.pricing').classList.remove('pricing-multi-user');
		} else {
			document.querySelector('.pricing').classList.remove('pricing-single-user');
			document.querySelector('.pricing').classList.add('pricing-multi-user');
		}
	}
</script>
