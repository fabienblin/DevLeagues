<?php

/* @AvanzuAdminTheme/Default/form.html.twig */
class __TwigTemplate_e5bfabadbc343675963c9293cd6c6254b69861b43de203635b4a3eb09a1ae593 extends Twig_Template
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
        $__internal_8cedc566e86d47313c1a6824710bdd2a094611452c450ab34f16bb5b5dfbef42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8cedc566e86d47313c1a6824710bdd2a094611452c450ab34f16bb5b5dfbef42->enter($__internal_8cedc566e86d47313c1a6824710bdd2a094611452c450ab34f16bb5b5dfbef42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $__internal_90a5d40e95fede1503f142c66b8261f225455e2105ff46d499928d9325ebd4e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90a5d40e95fede1503f142c66b8261f225455e2105ff46d499928d9325ebd4e9->enter($__internal_90a5d40e95fede1503f142c66b8261f225455e2105ff46d499928d9325ebd4e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cedc566e86d47313c1a6824710bdd2a094611452c450ab34f16bb5b5dfbef42->leave($__internal_8cedc566e86d47313c1a6824710bdd2a094611452c450ab34f16bb5b5dfbef42_prof);

        
        $__internal_90a5d40e95fede1503f142c66b8261f225455e2105ff46d499928d9325ebd4e9->leave($__internal_90a5d40e95fede1503f142c66b8261f225455e2105ff46d499928d9325ebd4e9_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_6224b2b76d13d20905a67aacbb31d3d0a034a47fbf9ddb9cb8cdee31e8cd6f56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6224b2b76d13d20905a67aacbb31d3d0a034a47fbf9ddb9cb8cdee31e8cd6f56->enter($__internal_6224b2b76d13d20905a67aacbb31d3d0a034a47fbf9ddb9cb8cdee31e8cd6f56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_9ca66689fec982a07e75a1ce3b9502f5ac17e1bc2292cb530b879cf85705670e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ca66689fec982a07e75a1ce3b9502f5ac17e1bc2292cb530b879cf85705670e->enter($__internal_9ca66689fec982a07e75a1ce3b9502f5ac17e1bc2292cb530b879cf85705670e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["macro"]) ? $context["macro"] : $this->getContext($context, "macro")), "box_header", array(0 => "built from macro", 1 => true, 2 => false, 3 => "primary"), "method"), "html", null, true);
        echo "
                <div class=\"box-body\">
                    some content...
                </div>
            </div>
        </div>
    </div>


";
        
        $__internal_9ca66689fec982a07e75a1ce3b9502f5ac17e1bc2292cb530b879cf85705670e->leave($__internal_9ca66689fec982a07e75a1ce3b9502f5ac17e1bc2292cb530b879cf85705670e_prof);

        
        $__internal_6224b2b76d13d20905a67aacbb31d3d0a034a47fbf9ddb9cb8cdee31e8cd6f56->leave($__internal_6224b2b76d13d20905a67aacbb31d3d0a034a47fbf9ddb9cb8cdee31e8cd6f56_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_523bcfef0769a4f343b253ee9eba3bec2ab2a9897e5c9effd97565f75863e5c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_523bcfef0769a4f343b253ee9eba3bec2ab2a9897e5c9effd97565f75863e5c2->enter($__internal_523bcfef0769a4f343b253ee9eba3bec2ab2a9897e5c9effd97565f75863e5c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_70ee0cf28f12c7c8d6dcced027e4e6ddd52781a32dc92b1ae7a7c231715d4e40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70ee0cf28f12c7c8d6dcced027e4e6ddd52781a32dc92b1ae7a7c231715d4e40->enter($__internal_70ee0cf28f12c7c8d6dcced027e4e6ddd52781a32dc92b1ae7a7c231715d4e40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_70ee0cf28f12c7c8d6dcced027e4e6ddd52781a32dc92b1ae7a7c231715d4e40->leave($__internal_70ee0cf28f12c7c8d6dcced027e4e6ddd52781a32dc92b1ae7a7c231715d4e40_prof);

        
        $__internal_523bcfef0769a4f343b253ee9eba3bec2ab2a9897e5c9effd97565f75863e5c2->leave($__internal_523bcfef0769a4f343b253ee9eba3bec2ab2a9897e5c9effd97565f75863e5c2_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_867e2b5b18dcc5b68e3030a184bca3e29957ad45140d29f92c872cb425381349 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_867e2b5b18dcc5b68e3030a184bca3e29957ad45140d29f92c872cb425381349->enter($__internal_867e2b5b18dcc5b68e3030a184bca3e29957ad45140d29f92c872cb425381349_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_af695ba42bfa1e7fc8d507a3bf634318b3dca489fb0c91b3ee55b88f03f42aed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af695ba42bfa1e7fc8d507a3bf634318b3dca489fb0c91b3ee55b88f03f42aed->enter($__internal_af695ba42bfa1e7fc8d507a3bf634318b3dca489fb0c91b3ee55b88f03f42aed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_af695ba42bfa1e7fc8d507a3bf634318b3dca489fb0c91b3ee55b88f03f42aed->leave($__internal_af695ba42bfa1e7fc8d507a3bf634318b3dca489fb0c91b3ee55b88f03f42aed_prof);

        
        $__internal_867e2b5b18dcc5b68e3030a184bca3e29957ad45140d29f92c872cb425381349->leave($__internal_867e2b5b18dcc5b68e3030a184bca3e29957ad45140d29f92c872cb425381349_prof);

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
{% block page_subtitle %} demonstration {% endblock %}", "@AvanzuAdminTheme/Default/form.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/Default/form.html.twig");
    }
}
