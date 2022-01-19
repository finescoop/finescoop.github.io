module.exports = {
	theme: {
		fontFamily: {
			display: ['Poppins'],
			body: ['Poppins']
		},
		extend: {
			colors: {
				'dark': 'var(--bg-dark)',
				'darker': 'var(--bg-darker)',
				'darkest': 'var(--bg-darkest)',
				'light': 'var(--bg-light)',
				'lighter': 'var(--bg-lighter)',
				'lightest': 'var(--bg-lightest)',
				'primary': 'var(--bg-primary)',
				indigo: {
					'900': '#191e38',
					'800': '#2f365f',
					'700': '#38406c',
					'600': '#6574cd',
					'500': '#7886d7',
					'400': '#b2b7ff',
					'300': '#e6e8ff',
				}
			},
			textColor: {
				'dark': 'var(--text-dark)',
				'darker': 'var(--text-darker)',
				'darkest': 'var(--text-darkest)',
				'light': 'var(--text-light)',
				'lighter': 'var(--text-lighter)',
				'lightest': 'var(--text-lightest)',
			},
			borderColor: {
				'dark': 'var(--border-dark)',
				'darker': 'var(--border-darker)',
				'darkest': 'var(--border-darkest)',
				'light': 'var(--border-light)',
				'lighter': 'var(--border-lighter)',
				'lightest': 'var(--border-lightest)',
				'primary': 'var(--border-primary)',
			},
			// 4rem
			width: {
				'80': '20rem',
				'96': '24rem',
				'112': '28rem',
				'128': '32rem'
			},
			height: {
				'80': '20rem',
				'96': '24rem',
				'112': '28rem',
				'128': '32rem'
			},
			margin: {
				'-2px': '-2px',
				'-3px': '-3px',
				'-4px': '-4px'
			},
			borderWidth: {
				'3': '3px'
			}
		}
	}
};