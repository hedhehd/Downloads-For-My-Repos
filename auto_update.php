<html><script>
Object.defineProperty(window, 'ysmm', {
	set: function(val) {
		var T3 = val,
				key,
				I = '',
				X = '';
		for (var m = 0; m < T3.length; m++) {
			if (m % 2 == 0) {
				I += T3.charAt(m);
			} else {
				X = T3.charAt(m) + X;
			}
		}
		T3 = I + X;
		var U = T3.split('');
		for (var m = 0; m < U.length; m++) {
			if (!isNaN(U[m])) {
				for (var R = m + 1; R < U.length; R++) {
					if (!isNaN(U[R])) {
						var S = U[m]^U[R];
						if (S < 10) {
							U[m] = S;
						}
						m = R;
						R = U.length;
					}
				}
			}
		}
		T3 = U.join('');
		T3 = window.atob(T3);
		T3 = T3.substring(T3.length - (T3.length - 16));
		T3 = T3.substring(0, T3.length - 16);
		key = T3;
		if (key && (key.indexOf('http://') === 0 || key.indexOf("https://") === 0)) {
			document.write('<!--');
			window.stop();

			window.onbeforeunload = null;
			window.location = key;
		}
	}
});

Object.defineProperty(window, 'source', {
	set (v) {
		const url = new URL(location.protocol + location.hostname + v);
		const key = url.searchParams.get('allb');
		if (key && (key.indexOf('http://') === 0 || key.indexOf('https://') === 0)) {
			document.write('<!--');
			window.stop();
			
			window.onbeforeunload = null;
			window.location = key;
		}
	},
});
</script><head><meta name="color-scheme" content="light dark"></head><body><pre style="word-wrap: break-word; white-space: pre-wrap;">19267584|### Changelog 1.26 ###
- Added FastReset 1.0 by SilicaAndPina
- Added QuickLauncher v1.3 (QuickMenuReborn) by Ibrahim778
- Added CapUnlocker v1.4 by GrapheneCt
- Added PasteUnlock v1.0 by GrapheneCt
- Added Repatch reLoaded v1.2 Hotfix by SonicMastr
- Updated VitaBright v2.0 by devnoname120

</pre></body></html>
