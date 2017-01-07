<?php

/* @DevLeagues/Default/index.html.twig */
class __TwigTemplate_aa761722577c0949f3fe51157b9fc13297fb3caa7168ebb35823eb085e60ac8f extends Twig_Template
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
        $__internal_b6ed46e0f70f8b601cae5dfab998b46ec73879676b8c1657192d7ddb6d591584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6ed46e0f70f8b601cae5dfab998b46ec73879676b8c1657192d7ddb6d591584->enter($__internal_b6ed46e0f70f8b601cae5dfab998b46ec73879676b8c1657192d7ddb6d591584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Default/index.html.twig"));

        $__internal_dfef7580affe4adcfb7c0be2775557684bdb741cd25f29b2d6f30df95ee32ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfef7580affe4adcfb7c0be2775557684bdb741cd25f29b2d6f30df95ee32ec6->enter($__internal_dfef7580affe4adcfb7c0be2775557684bdb741cd25f29b2d6f30df95ee32ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@DevLeagues/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6ed46e0f70f8b601cae5dfab998b46ec73879676b8c1657192d7ddb6d591584->leave($__internal_b6ed46e0f70f8b601cae5dfab998b46ec73879676b8c1657192d7ddb6d591584_prof);

        
        $__internal_dfef7580affe4adcfb7c0be2775557684bdb741cd25f29b2d6f30df95ee32ec6->leave($__internal_dfef7580affe4adcfb7c0be2775557684bdb741cd25f29b2d6f30df95ee32ec6_prof);

    }

    // line 3
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_270b008cf6da9c56cca97fc5b4b7d5d40b55d79111b86458fbab69ea377b868f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_270b008cf6da9c56cca97fc5b4b7d5d40b55d79111b86458fbab69ea377b868f->enter($__internal_270b008cf6da9c56cca97fc5b4b7d5d40b55d79111b86458fbab69ea377b868f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_d0c86cb4317e87434b23cede70252621ed33b592b45dc69d3e8e2232c7ed83cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0c86cb4317e87434b23cede70252621ed33b592b45dc69d3e8e2232c7ed83cc->enter($__internal_d0c86cb4317e87434b23cede70252621ed33b592b45dc69d3e8e2232c7ed83cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo "Home Page";
        
        $__internal_d0c86cb4317e87434b23cede70252621ed33b592b45dc69d3e8e2232c7ed83cc->leave($__internal_d0c86cb4317e87434b23cede70252621ed33b592b45dc69d3e8e2232c7ed83cc_prof);

        
        $__internal_270b008cf6da9c56cca97fc5b4b7d5d40b55d79111b86458fbab69ea377b868f->leave($__internal_270b008cf6da9c56cca97fc5b4b7d5d40b55d79111b86458fbab69ea377b868f_prof);

    }

    // line 6
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_c67dcf48e547ea260ad64f3a4241b48d71c18c4a2c6c4f07babea7bd38480c94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c67dcf48e547ea260ad64f3a4241b48d71c18c4a2c6c4f07babea7bd38480c94->enter($__internal_c67dcf48e547ea260ad64f3a4241b48d71c18c4a2c6c4f07babea7bd38480c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_63283e54c3d3751fc904e4faec75246fff64f61b3625bf9d1b7fb9918ffd34d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63283e54c3d3751fc904e4faec75246fff64f61b3625bf9d1b7fb9918ffd34d7->enter($__internal_63283e54c3d3751fc904e4faec75246fff64f61b3625bf9d1b7fb9918ffd34d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo "This is the temporary home page of DevLeagues.com";
        
        $__internal_63283e54c3d3751fc904e4faec75246fff64f61b3625bf9d1b7fb9918ffd34d7->leave($__internal_63283e54c3d3751fc904e4faec75246fff64f61b3625bf9d1b7fb9918ffd34d7_prof);

        
        $__internal_c67dcf48e547ea260ad64f3a4241b48d71c18c4a2c6c4f07babea7bd38480c94->leave($__internal_c67dcf48e547ea260ad64f3a4241b48d71c18c4a2c6c4f07babea7bd38480c94_prof);

    }

    // line 13
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_47e49c4cc1ae54f3525598f3174a40d9c1963bffffb494c677be6185498ba0c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47e49c4cc1ae54f3525598f3174a40d9c1963bffffb494c677be6185498ba0c4->enter($__internal_47e49c4cc1ae54f3525598f3174a40d9c1963bffffb494c677be6185498ba0c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_f49710ab13991ef78576373046dcfdaca52da6b23fe5c9550ee767f9dacf610b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f49710ab13991ef78576373046dcfdaca52da6b23fe5c9550ee767f9dacf610b->enter($__internal_f49710ab13991ef78576373046dcfdaca52da6b23fe5c9550ee767f9dacf610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_f49710ab13991ef78576373046dcfdaca52da6b23fe5c9550ee767f9dacf610b->leave($__internal_f49710ab13991ef78576373046dcfdaca52da6b23fe5c9550ee767f9dacf610b_prof);

        
        $__internal_47e49c4cc1ae54f3525598f3174a40d9c1963bffffb494c677be6185498ba0c4->leave($__internal_47e49c4cc1ae54f3525598f3174a40d9c1963bffffb494c677be6185498ba0c4_prof);

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
{% endblock %}", "@DevLeagues/Default/index.html.twig", "/var/www/html/devleagues/github/src/DevLeaguesBundle/Resources/views/Default/index.html.twig");
    }
}
