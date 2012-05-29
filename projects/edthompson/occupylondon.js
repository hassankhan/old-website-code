var data = [
    {
        image: 'img/occupylondon/0.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'Anonymous wearing V mask on the steps of St Pauls Cathedral (2011)'
    },
    {
        image: 'img/occupylondon/1.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'Occupy London camp on the grounds of St Pauls Cathedral (2011)'
    },
    {
        image: 'img/occupylondon/2.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'A working group discussing ideas to be brought before the General Assembly (2011)'
    },
    {
        image: 'img/occupylondon/3.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'A lecture at Tent City University (2011)'
    },
    {
        image: 'img/occupylondon/4.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'An occupier on the phone in the Occupy cinema whilst a projector shines on St Pauls Cathedral (2011)'
    },
    {
        image: 'img/occupylondon/5.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'An occupier cuts off his dreadlocks in a ritual/statement (2011)'
    },
    {
        image: 'img/occupylondon/6.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'Occupiers take part in a silent scream protest (2011)'
    },
    {
        image: 'img/occupylondon/7.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'Bailiffs and police force their way into Earl Street Community Centre (2012)'
    },
    {
        image: 'img/occupylondon/8.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'An occupier holds a smoke grenade during the St Pauls Cathedral eviction (2012)'
    },
    {
        image: 'img/occupylondon/9.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'An occupier embraces a policeman in riot gear during the eviction of the OccupyLSX camp (2012)'
    },
    {
        image: 'img/occupylondon/10.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'John, a homeless man, tries to find his belongings in a pile of tents to be destroyed during the St Pauls eviction (2012)'
    },
    {
        image: 'img/occupylondon/11.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'A woman prays on the steps of St Pauls Cathedral before she is removed by riot police (2012)'
    },
    {
        image: 'img/occupylondon/12.jpg',
        big: 'img/occupylondon/big.jpg',
        description: 'An occupier who chose to peacefully resist is arrested by riot police (2012)'
    },
];

Galleria.loadTheme('galleria/themes/classic/galleria.classic.min.js');

Galleria.run('#gallery', {
	dataSource: data,
	height: 500,
	width: 700,
	trueFullscreen: true
});

Galleria.ready(function() {
	var gallery = this; // galleria is ready and the gallery is assigned
	$('#fullscreen').click(function() {
	gallery.toggleFullscreen(); // toggles the fullscreen
	});
});