$(window).load(function() {
    $('.page_load').fadeOut(function() {
        this.remove();

        $('article.cover .photo').animate({top: 0}, 1000, 'easeOutExpo');
        $('article.cover .color').animate({bottom: 0}, 1000, 'easeOutExpo', function() {
           $('article.cover .logo').animate({opacity: 1}, 500);
	   $('article.cover .button').animate({opacity: 1}, 500);
        });
    });
});

$(window).bind('load resize', function() {
	$('article.portfolio .item').height(Math.round(($(window).width()*0.145) / 20) * 20);
});

$('article.cover a.button').click(function() {
  if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top + 1
      }, 1000);
      return false;
    }
  }
});

function setCanvasSize()
{
	var width = $(window).width();
        var height = $(window).height();
	var asp = true;

        if(width > height) {
            width -= 220;
            height -= 40;
	
        } else {
            width -= 40;
            height -= 220;
	    asp = false;
        }

	canvas.style.cssText = "width:" + width + ";height:" + height;

        //setWindowDimensions()
        //inject(windowScript, true, elem)

	return [width, height, asp]
}

const canvas = $('.gallery_preview .display canvas')[0];
let wh = setCanvasSize();
const gpu = new GPU.GPU({ mode: 'gpu' });

const feeder = gpu.createKernel(function(image) {
    return image[this.thread.x];
}, { pipeline: true, dynamicOutput: true });

const renderer = gpu.createKernel(function(image) {
    const pixel = image[this.thread.y][this.thread.x];
    this.color(pixel[0], pixel[1], pixel[2], 100);
}, { graphical: true, dynamicOutput: true, immutable: true });

function normalizeWindowDimension(value, targetDimension) {
    if (value > targetDimension) {
        return value % targetDimension
    }
    if (value < 0) {
        return targetDimension + value
    }
    return value
}

function preventScroll(e) {
	e.preventDefault();
	e.stopPropagation();
	return false;
}

function preview(item) {
    //$('body').addClass('noscroll');
	document.body.addEventListener('wheel', preventScroll, { passive: false });
	document.body.addEventListener('touchmove', preventScroll, { passive: false });
	document.body.addEventListener('DOMMouseScroll', preventScroll, { passive: false });
	
    $('.gallery_preview .display').html('<div class="loading"></div>');
    $('.gallery_preview').removeClass('hide').addClass('show');

    view_image = new Image();
    view_image.src = 'content/gallery_static/' + item;
    view_image.crossOrigin = "anonymous";
    view_image.onload = () =>
    {
	var wh = setCanvasSize();

	var p = (wh[2] ? (view_image.naturalWidth / wh[0]) : (view_image.naturalHeight / wh[1]))

	canvas.width = view_image.width / p;
	canvas.height = view_image.height / p;

	//feeder.setOutput([view_image.width]);
	//var a = feeder(view_image);

	//renderer.setOutput([view_image.width, view_image.height]);	
	//var b = renderer(view_image);

    canvas.getContext('2d').drawImage(view_image, 0, 0, canvas.width, canvas.height);

	$('.gallery_preview .display').html(canvas);
        //$('.gallery_preview .display').html('<img src='+view_image.src+' style="max-width: '+width+'px; max-height: '+height+'px; opacity: 0;" alt="Picture">');
        $('.gallery_preview .display canvas').animate({opacity: '1'}, 900);
    }
}

function preview_hide() {
    $('.gallery_preview').removeClass('show').addClass('hide');
	canvas.style.cssText = "opacity:0"
    //$('.gallery_preview .display').html('');
    //$('body').removeAttr('class');
	document.body.removeEventListener('wheel', preventScroll, { passive: false });
	document.body.removeEventListener('touchmove', preventScroll, { passive: false });
	document.body.removeEventListener('DOMMouseScroll', preventScroll, { passive: false });
}

$('.gallery_preview .preview_hide').click(function() { preview_hide(); });

$(document).keydown(function(e) { if (e.keyCode == 27) { preview_hide(); }}); // ESCAPE key