<?php

/* @SonataAdmin/CRUD/select_subclass.html.twig */
class __TwigTemplate_3371bdb63d51f9dce594afcb901dd8071764793b42030e44d581e536e8b86266 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 11
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/select_subclass.html.twig", 11);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_434ca7aa793c8de69621867d95be0f29e80f50e9c90f7f269c23759d694a7b92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434ca7aa793c8de69621867d95be0f29e80f50e9c90f7f269c23759d694a7b92->enter($__internal_434ca7aa793c8de69621867d95be0f29e80f50e9c90f7f269c23759d694a7b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/select_subclass.html.twig"));

        $__internal_7f116b902652e010f28254eec70d0e9c7a1bb92ea23e6e2263e3152cedabbc92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f116b902652e010f28254eec70d0e9c7a1bb92ea23e6e2263e3152cedabbc92->enter($__internal_7f116b902652e010f28254eec70d0e9c7a1bb92ea23e6e2263e3152cedabbc92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/select_subclass.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_434ca7aa793c8de69621867d95be0f29e80f50e9c90f7f269c23759d694a7b92->leave($__internal_434ca7aa793c8de69621867d95be0f29e80f50e9c90f7f269c23759d694a7b92_prof);

        
        $__internal_7f116b902652e010f28254eec70d0e9c7a1bb92ea23e6e2263e3152cedabbc92->leave($__internal_7f116b902652e010f28254eec70d0e9c7a1bb92ea23e6e2263e3152cedabbc92_prof);

    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        $__internal_29d11aa285f1f3df3789c62276900048acb5dbad74aeadb0d4b44bf47a1a9441 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29d11aa285f1f3df3789c62276900048acb5dbad74aeadb0d4b44bf47a1a9441->enter($__internal_29d11aa285f1f3df3789c62276900048acb5dbad74aeadb0d4b44bf47a1a9441_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_24317ecd121634bd7ef3967427e1825ca47949ea721bb40283e754e9708a01de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24317ecd121634bd7ef3967427e1825ca47949ea721bb40283e754e9708a01de->enter($__internal_24317ecd121634bd7ef3967427e1825ca47949ea721bb40283e754e9708a01de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("title_select_subclass", array(), "SonataAdminBundle"), "html", null, true);
        
        $__internal_24317ecd121634bd7ef3967427e1825ca47949ea721bb40283e754e9708a01de->leave($__internal_24317ecd121634bd7ef3967427e1825ca47949ea721bb40283e754e9708a01de_prof);

        
        $__internal_29d11aa285f1f3df3789c62276900048acb5dbad74aeadb0d4b44bf47a1a9441->leave($__internal_29d11aa285f1f3df3789c62276900048acb5dbad74aeadb0d4b44bf47a1a9441_prof);

    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        $__internal_f6a1e8438b7a490a52009d427e7bc95c700a126ff72e58baeffb9330b96a2ee0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6a1e8438b7a490a52009d427e7bc95c700a126ff72e58baeffb9330b96a2ee0->enter($__internal_f6a1e8438b7a490a52009d427e7bc95c700a126ff72e58baeffb9330b96a2ee0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_5e730600257b652e0cc5cd116254b308ea6a73fa4b89fbd2941c8a96df390e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e730600257b652e0cc5cd116254b308ea6a73fa4b89fbd2941c8a96df390e9f->enter($__internal_5e730600257b652e0cc5cd116254b308ea6a73fa4b89fbd2941c8a96df390e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 16
        echo "    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                ";
        // line 19
        $this->displayBlock("title", $context, $blocks);
        echo "
            </h3>
        </div>
        <div class=\"box-body\">
            ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses", array())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
            // line 24
            echo "                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
            echo "\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        ";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "translationdomain", array()), "SonataAdminBundle")) : ("SonataAdminBundle"))), "html", null, true);
            echo "
                    </a>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 33
            echo "                <span class=\"alert alert-info\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_subclass_available", array(), "SonataAdminBundle"), "html", null, true);
            echo "</span>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "            <div class=\"clearfix\"></div>
        </div>
    </div>
";
        
        $__internal_5e730600257b652e0cc5cd116254b308ea6a73fa4b89fbd2941c8a96df390e9f->leave($__internal_5e730600257b652e0cc5cd116254b308ea6a73fa4b89fbd2941c8a96df390e9f_prof);

        
        $__internal_f6a1e8438b7a490a52009d427e7bc95c700a126ff72e58baeffb9330b96a2ee0->leave($__internal_f6a1e8438b7a490a52009d427e7bc95c700a126ff72e58baeffb9330b96a2ee0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/select_subclass.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 35,  103 => 33,  94 => 29,  87 => 25,  84 => 24,  79 => 23,  72 => 19,  67 => 16,  58 => 15,  40 => 13,  19 => 11,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}
{% extends base_template %}

{% block title %}{{ 'title_select_subclass'|trans({}, 'SonataAdminBundle') }}{% endblock %}

{% block content %}
    <div class=\"box box-success\">
        <div class=\"box-header\">
            <h3 class=\"box-title\">
                {{ block('title') }}
            </h3>
        </div>
        <div class=\"box-body\">
            {% for subclass in admin.subclasses|keys %}
                <div class=\"col-lg-2 col-md-3 col-sm-4 col-xs-6\">
                    <a href=\"{{ admin.generateUrl(action, {'subclass': subclass }) }}\"
                       class=\"btn btn-app btn-block\"
                            >
                        <i class=\"fa fa-plus-square\" aria-hidden=\"true\"></i>
                        {{ subclass|trans({}, admin.translationdomain|default('SonataAdminBundle')) }}
                    </a>
                </div>
            {% else %}
                <span class=\"alert alert-info\">{{ 'no_subclass_available'|trans({}, 'SonataAdminBundle') }}</span>
            {% endfor %}
            <div class=\"clearfix\"></div>
        </div>
    </div>
{% endblock %}
", "@SonataAdmin/CRUD/select_subclass.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/select_subclass.html.twig");
    }
}
