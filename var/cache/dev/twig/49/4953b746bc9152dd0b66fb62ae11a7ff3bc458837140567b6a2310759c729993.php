<?php

/* @DevLeagues/Default/index.html.twig */
class __TwigTemplate_91eb351caf023008486de7e707ed4873dd04d67fbf6a221a54d75679c952f770 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@DevLeagues/Default/index.html.twig", 1);
        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d08afec754be28f432fbaf154f81d13f6146ea3689b3444b03353c3c139b82f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d08afec754be28f432fbaf154f81d13f6146ea3689b3444b03353c3c139b82f->enter($__internal_3d08afec754be28f432fbaf154f81d13f6146ea3689b3444b03353c3c139b82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Default/index.html.twig"));

        $__internal_76a41c8acad019471e07d6cc71733862e0ff7504e9b9c2f5f7e0faf2fd64a735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a41c8acad019471e07d6cc71733862e0ff7504e9b9c2f5f7e0faf2fd64a735->enter($__internal_76a41c8acad019471e07d6cc71733862e0ff7504e9b9c2f5f7e0faf2fd64a735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d08afec754be28f432fbaf154f81d13f6146ea3689b3444b03353c3c139b82f->leave($__internal_3d08afec754be28f432fbaf154f81d13f6146ea3689b3444b03353c3c139b82f_prof);

        
        $__internal_76a41c8acad019471e07d6cc71733862e0ff7504e9b9c2f5f7e0faf2fd64a735->leave($__internal_76a41c8acad019471e07d6cc71733862e0ff7504e9b9c2f5f7e0faf2fd64a735_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_4dbb7b9fb14b8d00f814984fe2c76b50f4db0f682e90e4ab5f1baa02ec220ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dbb7b9fb14b8d00f814984fe2c76b50f4db0f682e90e4ab5f1baa02ec220ec8->enter($__internal_4dbb7b9fb14b8d00f814984fe2c76b50f4db0f682e90e4ab5f1baa02ec220ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_baff55a9722c2f185fc1702cf284e156621bb33fcc4d03c76d2d9fa668d30580 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baff55a9722c2f185fc1702cf284e156621bb33fcc4d03c76d2d9fa668d30580->enter($__internal_baff55a9722c2f185fc1702cf284e156621bb33fcc4d03c76d2d9fa668d30580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Home Page";
        
        $__internal_baff55a9722c2f185fc1702cf284e156621bb33fcc4d03c76d2d9fa668d30580->leave($__internal_baff55a9722c2f185fc1702cf284e156621bb33fcc4d03c76d2d9fa668d30580_prof);

        
        $__internal_4dbb7b9fb14b8d00f814984fe2c76b50f4db0f682e90e4ab5f1baa02ec220ec8->leave($__internal_4dbb7b9fb14b8d00f814984fe2c76b50f4db0f682e90e4ab5f1baa02ec220ec8_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_4f4244c2551a2fa3e11fc745d7be04e8da3b42fefa76516ff81d3ad71ed8c157 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4244c2551a2fa3e11fc745d7be04e8da3b42fefa76516ff81d3ad71ed8c157->enter($__internal_4f4244c2551a2fa3e11fc745d7be04e8da3b42fefa76516ff81d3ad71ed8c157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_bcdbebc4e1a2efa42543a2eb7605bc26005f89911c57561b86e5f5369e103a1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcdbebc4e1a2efa42543a2eb7605bc26005f89911c57561b86e5f5369e103a1e->enter($__internal_bcdbebc4e1a2efa42543a2eb7605bc26005f89911c57561b86e5f5369e103a1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "This is the temporary home page of DevLeagues.com";
        
        $__internal_bcdbebc4e1a2efa42543a2eb7605bc26005f89911c57561b86e5f5369e103a1e->leave($__internal_bcdbebc4e1a2efa42543a2eb7605bc26005f89911c57561b86e5f5369e103a1e_prof);

        
        $__internal_4f4244c2551a2fa3e11fc745d7be04e8da3b42fefa76516ff81d3ad71ed8c157->leave($__internal_4f4244c2551a2fa3e11fc745d7be04e8da3b42fefa76516ff81d3ad71ed8c157_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_18dce06e57cc3469b3752b6c455f573ac17a1d35ee49cdf32fe772dc3078d734 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18dce06e57cc3469b3752b6c455f573ac17a1d35ee49cdf32fe772dc3078d734->enter($__internal_18dce06e57cc3469b3752b6c455f573ac17a1d35ee49cdf32fe772dc3078d734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_d3d0dec7f0e7518da27eaff1ea015a6ff07688967bac9fa98de0acdcb1283189 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3d0dec7f0e7518da27eaff1ea015a6ff07688967bac9fa98de0acdcb1283189->enter($__internal_d3d0dec7f0e7518da27eaff1ea015a6ff07688967bac9fa98de0acdcb1283189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 14
        echo "<br />
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Phasellus cursus eros nec bibendum porttitor. Suspendisse semper pellentesque enim, laoreet accumsan est placerat nec.
Sed eu sem placerat, facilisis nisi vitae, tristique risus. Ut condimentum sem ac nibh ultrices, non maximus urna condimentum.
Duis id bibendum magna. Suspendisse potenti. Integer iaculis ultrices ultricies. Donec in mauris quis erat ornare porttitor in vel sem.
Vivamus tincidunt tempus dui, a egestas mi congue in. Morbi tincidunt sapien at urna posuere lobortis.
Duis sodales mauris vel nisi accumsan gravida. Proin sed orci id justo fringilla tincidunt.
<br />
<br />
Duis felis sapien, lobortis quis elit ac, finibus interdum tortor. Mauris purus nunc, vehicula at volutpat a, fringilla tristique nisl.
Mauris semper at nulla id aliquet. Curabitur congue ultrices leo pellentesque auctor. Etiam id venenatis ex, vel sagittis sapien.
Donec arcu tellus, iaculis sit amet pulvinar vel, sagittis id felis.
Suspendisse feugiat, nulla ac gravida consectetur, tellus nunc molestie tortor, fringilla ullamcorper augue nulla id libero.
<br />
<br />
Maecenas scelerisque metus non nisi rutrum maximus. Mauris rhoncus blandit finibus.
Phasellus scelerisque felis ut nulla luctus, ac sollicitudin ex fringilla.
In molestie quam libero, a viverra lacus tristique vitae. Praesent viverra nunc sed tincidunt congue.
Phasellus vel justo ac dui placerat ornare. Integer luctus nisl vel hendrerit porttitor.
Vestibulum volutpat mi risus, vel dictum dui tempor nec. Aenean venenatis est ut venenatis vulputate.
Suspendisse quis quam metus. Quisque ac ultrices turpis. Phasellus volutpat sed tellus ac dapibus.
Nulla luctus nec metus eget accumsan.
<br /><br />
Nulla non ipsum lectus. Nunc dui velit, aliquet vitae massa a, egestas pretium felis.
Donec pretium ipsum quis turpis accumsan elementum. Donec auctor nibh erat, vitae scelerisque risus pretium ut.
Praesent mattis non nibh sed molestie. Praesent sit amet ultrices felis. Donec sodales, dolor id mattis posuere,
est mauris hendrerit leo, eu auctor tellus ante sit amet ipsum. Donec nisi turpis, interdum at auctor ac,
vehicula non felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
<br /><br />
Nulla at placerat ligula, vitae efficitur tortor. Suspendisse in dictum lorem.
Ut sed facilisis diam. Praesent tristique vehicula nisl, fermentum dapibus arcu condimentum eget.
Nunc egestas leo vel sapien cursus placerat. Sed condimentum et odio ut imperdiet. Aenean vel turpis
vitae nibh rhoncus efficitur. Suspendisse nibh tortor, pharetra et turpis id, tempor blandit nisi. 
<br />
<br />
<br />
<a href=";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/contact"), "html", null, true);
        echo ">Contact</a>
<br />
<a href=";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/about"), "html", null, true);
        echo ">About</a>
<br />
<a href=";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/challenge"), "html", null, true);
        echo ">challenge</a>
<br />
<a href=";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("app_dev.php/community"), "html", null, true);
        echo ">community</a>
<br />
";
        
        $__internal_d3d0dec7f0e7518da27eaff1ea015a6ff07688967bac9fa98de0acdcb1283189->leave($__internal_d3d0dec7f0e7518da27eaff1ea015a6ff07688967bac9fa98de0acdcb1283189_prof);

        
        $__internal_18dce06e57cc3469b3752b6c455f573ac17a1d35ee49cdf32fe772dc3078d734->leave($__internal_18dce06e57cc3469b3752b6c455f573ac17a1d35ee49cdf32fe772dc3078d734_prof);

    }

    public function getTemplateName()
    {
        return "@DevLeagues/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 56,  135 => 54,  130 => 52,  125 => 50,  87 => 14,  78 => 13,  60 => 6,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'AvanzuAdminThemeBundle:layout:base-layout.html.twig' %}

{% block page_title %}Home Page{% endblock %}


{% block page_subtitle %}This is the temporary home page of DevLeagues.com{% endblock %}






{% block page_content %}
<br />
Lorem ipsum dolor sit amet, consectetur adipiscing elit.
Phasellus cursus eros nec bibendum porttitor. Suspendisse semper pellentesque enim, laoreet accumsan est placerat nec.
Sed eu sem placerat, facilisis nisi vitae, tristique risus. Ut condimentum sem ac nibh ultrices, non maximus urna condimentum.
Duis id bibendum magna. Suspendisse potenti. Integer iaculis ultrices ultricies. Donec in mauris quis erat ornare porttitor in vel sem.
Vivamus tincidunt tempus dui, a egestas mi congue in. Morbi tincidunt sapien at urna posuere lobortis.
Duis sodales mauris vel nisi accumsan gravida. Proin sed orci id justo fringilla tincidunt.
<br />
<br />
Duis felis sapien, lobortis quis elit ac, finibus interdum tortor. Mauris purus nunc, vehicula at volutpat a, fringilla tristique nisl.
Mauris semper at nulla id aliquet. Curabitur congue ultrices leo pellentesque auctor. Etiam id venenatis ex, vel sagittis sapien.
Donec arcu tellus, iaculis sit amet pulvinar vel, sagittis id felis.
Suspendisse feugiat, nulla ac gravida consectetur, tellus nunc molestie tortor, fringilla ullamcorper augue nulla id libero.
<br />
<br />
Maecenas scelerisque metus non nisi rutrum maximus. Mauris rhoncus blandit finibus.
Phasellus scelerisque felis ut nulla luctus, ac sollicitudin ex fringilla.
In molestie quam libero, a viverra lacus tristique vitae. Praesent viverra nunc sed tincidunt congue.
Phasellus vel justo ac dui placerat ornare. Integer luctus nisl vel hendrerit porttitor.
Vestibulum volutpat mi risus, vel dictum dui tempor nec. Aenean venenatis est ut venenatis vulputate.
Suspendisse quis quam metus. Quisque ac ultrices turpis. Phasellus volutpat sed tellus ac dapibus.
Nulla luctus nec metus eget accumsan.
<br /><br />
Nulla non ipsum lectus. Nunc dui velit, aliquet vitae massa a, egestas pretium felis.
Donec pretium ipsum quis turpis accumsan elementum. Donec auctor nibh erat, vitae scelerisque risus pretium ut.
Praesent mattis non nibh sed molestie. Praesent sit amet ultrices felis. Donec sodales, dolor id mattis posuere,
est mauris hendrerit leo, eu auctor tellus ante sit amet ipsum. Donec nisi turpis, interdum at auctor ac,
vehicula non felis. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
<br /><br />
Nulla at placerat ligula, vitae efficitur tortor. Suspendisse in dictum lorem.
Ut sed facilisis diam. Praesent tristique vehicula nisl, fermentum dapibus arcu condimentum eget.
Nunc egestas leo vel sapien cursus placerat. Sed condimentum et odio ut imperdiet. Aenean vel turpis
vitae nibh rhoncus efficitur. Suspendisse nibh tortor, pharetra et turpis id, tempor blandit nisi. 
<br />
<br />
<br />
<a href={{ asset('app_dev.php/contact') }}>Contact</a>
<br />
<a href={{ asset('app_dev.php/about') }}>About</a>
<br />
<a href={{ asset('app_dev.php/challenge') }}>challenge</a>
<br />
<a href={{ asset('app_dev.php/community') }}>community</a>
<br />
{% endblock %}", "@DevLeagues/Default/index.html.twig", "/home/webmaster/www/public_html/DevLeagues/src/DevLeaguesBundle/Resources/views/Default/index.html.twig");
    }
}
