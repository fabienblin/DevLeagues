<?php

/* @AvanzuAdminTheme/Default/form.html.twig */
class __TwigTemplate_c04a728e2e3ad64fc9ce4f77a33b6a784e0f90e68c46e26dda5d6e6f6a912ea0 extends Twig_Template
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
        $__internal_9fbebd39a265cd806ff4f197c301d6ad552d84cc22b90365496998d9e2300589 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fbebd39a265cd806ff4f197c301d6ad552d84cc22b90365496998d9e2300589->enter($__internal_9fbebd39a265cd806ff4f197c301d6ad552d84cc22b90365496998d9e2300589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $__internal_049aa815ecd6ca332daba0e85fbfd3094f4f135797b4721b779cd73190e1a58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_049aa815ecd6ca332daba0e85fbfd3094f4f135797b4721b779cd73190e1a58e->enter($__internal_049aa815ecd6ca332daba0e85fbfd3094f4f135797b4721b779cd73190e1a58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Default/form.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9fbebd39a265cd806ff4f197c301d6ad552d84cc22b90365496998d9e2300589->leave($__internal_9fbebd39a265cd806ff4f197c301d6ad552d84cc22b90365496998d9e2300589_prof);

        
        $__internal_049aa815ecd6ca332daba0e85fbfd3094f4f135797b4721b779cd73190e1a58e->leave($__internal_049aa815ecd6ca332daba0e85fbfd3094f4f135797b4721b779cd73190e1a58e_prof);

    }

    // line 3
    public function block_page_content($context, array $blocks = array())
    {
        $__internal_352b049b581c0841ddac83e7a5d0e962d4585479efa39ce359d7a198afd6e372 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_352b049b581c0841ddac83e7a5d0e962d4585479efa39ce359d7a198afd6e372->enter($__internal_352b049b581c0841ddac83e7a5d0e962d4585479efa39ce359d7a198afd6e372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

        $__internal_8d03e212ea4682250655b0fa096f3ceed0fbe35f69d9a347dfc8b9f6935d9ff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d03e212ea4682250655b0fa096f3ceed0fbe35f69d9a347dfc8b9f6935d9ff1->enter($__internal_8d03e212ea4682250655b0fa096f3ceed0fbe35f69d9a347dfc8b9f6935d9ff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_content"));

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
        
        $__internal_8d03e212ea4682250655b0fa096f3ceed0fbe35f69d9a347dfc8b9f6935d9ff1->leave($__internal_8d03e212ea4682250655b0fa096f3ceed0fbe35f69d9a347dfc8b9f6935d9ff1_prof);

        
        $__internal_352b049b581c0841ddac83e7a5d0e962d4585479efa39ce359d7a198afd6e372->leave($__internal_352b049b581c0841ddac83e7a5d0e962d4585479efa39ce359d7a198afd6e372_prof);

    }

    // line 51
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_68072fd9d385f7c87dbb1bc40fad0883cb3cd2700d8817a44c7c0d42062b70de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68072fd9d385f7c87dbb1bc40fad0883cb3cd2700d8817a44c7c0d42062b70de->enter($__internal_68072fd9d385f7c87dbb1bc40fad0883cb3cd2700d8817a44c7c0d42062b70de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        $__internal_617a99d53b77088b744fb4390d1032254f6a02b2f38e7c86484e5ef363901f39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617a99d53b77088b744fb4390d1032254f6a02b2f38e7c86484e5ef363901f39->enter($__internal_617a99d53b77088b744fb4390d1032254f6a02b2f38e7c86484e5ef363901f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo " Forms ";
        
        $__internal_617a99d53b77088b744fb4390d1032254f6a02b2f38e7c86484e5ef363901f39->leave($__internal_617a99d53b77088b744fb4390d1032254f6a02b2f38e7c86484e5ef363901f39_prof);

        
        $__internal_68072fd9d385f7c87dbb1bc40fad0883cb3cd2700d8817a44c7c0d42062b70de->leave($__internal_68072fd9d385f7c87dbb1bc40fad0883cb3cd2700d8817a44c7c0d42062b70de_prof);

    }

    // line 52
    public function block_page_subtitle($context, array $blocks = array())
    {
        $__internal_ca538010015e3ee628f05660a46f48c367e39092ffe61068afc1d92d9496ef84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca538010015e3ee628f05660a46f48c367e39092ffe61068afc1d92d9496ef84->enter($__internal_ca538010015e3ee628f05660a46f48c367e39092ffe61068afc1d92d9496ef84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        $__internal_30b5be75134586e4628e15e255afb497385a44a2bd57f3b4d6d09035aff58cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_30b5be75134586e4628e15e255afb497385a44a2bd57f3b4d6d09035aff58cbe->enter($__internal_30b5be75134586e4628e15e255afb497385a44a2bd57f3b4d6d09035aff58cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_subtitle"));

        echo " demonstration ";
        
        $__internal_30b5be75134586e4628e15e255afb497385a44a2bd57f3b4d6d09035aff58cbe->leave($__internal_30b5be75134586e4628e15e255afb497385a44a2bd57f3b4d6d09035aff58cbe_prof);

        
        $__internal_ca538010015e3ee628f05660a46f48c367e39092ffe61068afc1d92d9496ef84->leave($__internal_ca538010015e3ee628f05660a46f48c367e39092ffe61068afc1d92d9496ef84_prof);

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
