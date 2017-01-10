<?php

/* @AvanzuAdminTheme/Default/form.html.twig */
class __TwigTemplate_d3706f0e2c765ce82ecf40af6bb8c67b4218f0f300719bba3e21125326069745 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AvanzuAdminThemeBundle:layout:base-layout.html.twig", "@AvanzuAdminTheme/Default/form.html.twig", 1);
        $this->blocks = array(
            'page_content' => array($this, 'block_page_content'),
            'page_title' => array($this, 'block_page_title'),
            'page_subtitle' => array($this, 'block_page_subtitle'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AvanzuAdminThemeBundle:layout:base-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_163716a539bd15f2db60590815eea01be9b97c67081f18025834855697948d4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163716a539bd15f2db60590815eea01be9b97c67081f18025834855697948d4b->enter($__internal_163716a539bd15f2db60590815eea01be9b97c67081f18025834855697948d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $__internal_c12aee8a9390d4393050ad68ab1d971c8d483dcab6ec43b0097c12d4de5802cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c12aee8a9390d4393050ad68ab1d971c8d483dcab6ec43b0097c12d4de5802cd->enter($__internal_c12aee8a9390d4393050ad68ab1d971c8d483dcab6ec43b0097c12d4de5802cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_163716a539bd15f2db60590815eea01be9b97c67081f18025834855697948d4b->leave($__internal_163716a539bd15f2db60590815eea01be9b97c67081f18025834855697948d4b_prof);

        
        $__internal_c12aee8a9390d4393050ad68ab1d971c8d483dcab6ec43b0097c12d4de5802cd->leave($__internal_c12aee8a9390d4393050ad68ab1d971c8d483dcab6ec43b0097c12d4de5802cd_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_2b1cb1e6b7ddaa9c1014ee05ebaf24780d47282e9a8c84d06ae54b9c70e3c1d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b1cb1e6b7ddaa9c1014ee05ebaf24780d47282e9a8c84d06ae54b9c70e3c1d0->enter($__internal_2b1cb1e6b7ddaa9c1014ee05ebaf24780d47282e9a8c84d06ae54b9c70e3c1d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_e46f11df30de2f9eef51a26d0c18e0ced582436c009d020cf730464244e967de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e46f11df30de2f9eef51a26d0c18e0ced582436c009d020cf730464244e967de->enter($__internal_e46f11df30de2f9eef51a26d0c18e0ced582436c009d020cf730464244e967de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        // line 4
        echo "
    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form');
        echo "
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["macro"] ?? $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_e46f11df30de2f9eef51a26d0c18e0ced582436c009d020cf730464244e967de->leave($__internal_e46f11df30de2f9eef51a26d0c18e0ced582436c009d020cf730464244e967de_prof);

        
        $__internal_2b1cb1e6b7ddaa9c1014ee05ebaf24780d47282e9a8c84d06ae54b9c70e3c1d0->leave($__internal_2b1cb1e6b7ddaa9c1014ee05ebaf24780d47282e9a8c84d06ae54b9c70e3c1d0_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_439606bc7151ed14201113343b8f0097e871a90c42989893b2f19c78571d3ea8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_439606bc7151ed14201113343b8f0097e871a90c42989893b2f19c78571d3ea8->enter($__internal_439606bc7151ed14201113343b8f0097e871a90c42989893b2f19c78571d3ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_72d00979ca6c52c8c6d1992f81098cb1d1489bf4118a4baaa7fbf70b15e39765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72d00979ca6c52c8c6d1992f81098cb1d1489bf4118a4baaa7fbf70b15e39765->enter($__internal_72d00979ca6c52c8c6d1992f81098cb1d1489bf4118a4baaa7fbf70b15e39765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_72d00979ca6c52c8c6d1992f81098cb1d1489bf4118a4baaa7fbf70b15e39765->leave($__internal_72d00979ca6c52c8c6d1992f81098cb1d1489bf4118a4baaa7fbf70b15e39765_prof);

        
        $__internal_439606bc7151ed14201113343b8f0097e871a90c42989893b2f19c78571d3ea8->leave($__internal_439606bc7151ed14201113343b8f0097e871a90c42989893b2f19c78571d3ea8_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_26fbd355c92e649dbf8b822e032be0379410eb108d1b3d394f6bbbbfc8794bbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26fbd355c92e649dbf8b822e032be0379410eb108d1b3d394f6bbbbfc8794bbd->enter($__internal_26fbd355c92e649dbf8b822e032be0379410eb108d1b3d394f6bbbbfc8794bbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_62f3183b137239ef73796570ad48a27a53530efcc01587d7e5db0306fced82a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62f3183b137239ef73796570ad48a27a53530efcc01587d7e5db0306fced82a7->enter($__internal_62f3183b137239ef73796570ad48a27a53530efcc01587d7e5db0306fced82a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_62f3183b137239ef73796570ad48a27a53530efcc01587d7e5db0306fced82a7->leave($__internal_62f3183b137239ef73796570ad48a27a53530efcc01587d7e5db0306fced82a7_prof);

        
        $__internal_26fbd355c92e649dbf8b822e032be0379410eb108d1b3d394f6bbbbfc8794bbd->leave($__internal_26fbd355c92e649dbf8b822e032be0379410eb108d1b3d394f6bbbbfc8794bbd_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Default/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 52,  112 => 51,  92 => 40,  75 => 26,  51 => 4,  42 => 3,  11 => 1,);
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

{% block page_content %}

    <div class=\"row\">
        <div class=\"col-md-4\">


        </div>
        <div class=\"col-md-4\">

        </div>
        <div class=\"col-md-4\">

        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-md-6\">

            <div class=\"box box-primary\">
                <div class=\"box-header\">
                    <h3 class=\"box-title\">Form Theme</h3>
                </div>
                <div class=\"box-body\">
                    {{ form(form) }}
                </div>
                <div class=\"box-footer clearfix\">

                        <button type=\"reset\" class=\"btn btn-warning pull-left\"><i class=\"fa fa-times\"></i> Cancel</button>
                        <button type=\"submit\" class=\"btn btn-primary pull-right\"><i class=\"fa fa-check-square\"></i> Submit</button>


                </div>
            </div>

        </div>
        <div class=\"col-md-6\">
            <div class=\"box box-solid box-primary\">
                {{ macro.box_header('built from macro', true, false, 'primary') }}
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


{% endblock %}

{% block page_title %} Forms {% endblock %}
{% block page_subtitle %} demonstration {% endblock %}", "@AvanzuAdminTheme/Default/form.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/AvanzuAdminThemeBundle/views/Default/form.html.twig");
    }
}
