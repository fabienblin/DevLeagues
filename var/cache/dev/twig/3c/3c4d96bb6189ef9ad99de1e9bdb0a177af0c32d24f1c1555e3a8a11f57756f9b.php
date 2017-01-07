<?php

/* @SonataAdmin/CRUD/preview.html.twig */
class __TwigTemplate_7b6e0a0338035f9ce67a4d53d76636ba84ad633388ec67d4954c70f33c2b5469 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataAdminBundle:CRUD:edit.html.twig", "@SonataAdmin/CRUD/preview.html.twig", 12);
        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'side_menu' => array($this, 'block_side_menu'),
            'formactions' => array($this, 'block_formactions'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:edit.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_737e8ed0299c04d543ac59085170634308446e11923d69a59d16def33f7f6537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737e8ed0299c04d543ac59085170634308446e11923d69a59d16def33f7f6537->enter($__internal_737e8ed0299c04d543ac59085170634308446e11923d69a59d16def33f7f6537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/preview.html.twig"));

        $__internal_1afadabe293164537a3f6521adf9810d49078429d04199c675eb7ebf8bc35efb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1afadabe293164537a3f6521adf9810d49078429d04199c675eb7ebf8bc35efb->enter($__internal_1afadabe293164537a3f6521adf9810d49078429d04199c675eb7ebf8bc35efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_737e8ed0299c04d543ac59085170634308446e11923d69a59d16def33f7f6537->leave($__internal_737e8ed0299c04d543ac59085170634308446e11923d69a59d16def33f7f6537_prof);

        
        $__internal_1afadabe293164537a3f6521adf9810d49078429d04199c675eb7ebf8bc35efb->leave($__internal_1afadabe293164537a3f6521adf9810d49078429d04199c675eb7ebf8bc35efb_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_95580a0f8c83f6be4c5a7215ba8bdd1cf33eab178386d463aa0777ce4b768895 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95580a0f8c83f6be4c5a7215ba8bdd1cf33eab178386d463aa0777ce4b768895->enter($__internal_95580a0f8c83f6be4c5a7215ba8bdd1cf33eab178386d463aa0777ce4b768895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_3dcaf1c78d211ae528ba18e24398a9d107a997129bca3f35ff81a4cfeefde554 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dcaf1c78d211ae528ba18e24398a9d107a997129bca3f35ff81a4cfeefde554->enter($__internal_3dcaf1c78d211ae528ba18e24398a9d107a997129bca3f35ff81a4cfeefde554_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_3dcaf1c78d211ae528ba18e24398a9d107a997129bca3f35ff81a4cfeefde554->leave($__internal_3dcaf1c78d211ae528ba18e24398a9d107a997129bca3f35ff81a4cfeefde554_prof);

        
        $__internal_95580a0f8c83f6be4c5a7215ba8bdd1cf33eab178386d463aa0777ce4b768895->leave($__internal_95580a0f8c83f6be4c5a7215ba8bdd1cf33eab178386d463aa0777ce4b768895_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_1fa299aef1949f983af3de0a20c5c37eae8dbbef9ade86b3dcbc0fdac634443d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fa299aef1949f983af3de0a20c5c37eae8dbbef9ade86b3dcbc0fdac634443d->enter($__internal_1fa299aef1949f983af3de0a20c5c37eae8dbbef9ade86b3dcbc0fdac634443d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_4275d87adc9ac2a5f6201f2d1de3453c43abd32b8171d1f17d5f8b8202b89c3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4275d87adc9ac2a5f6201f2d1de3453c43abd32b8171d1f17d5f8b8202b89c3f->enter($__internal_4275d87adc9ac2a5f6201f2d1de3453c43abd32b8171d1f17d5f8b8202b89c3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_4275d87adc9ac2a5f6201f2d1de3453c43abd32b8171d1f17d5f8b8202b89c3f->leave($__internal_4275d87adc9ac2a5f6201f2d1de3453c43abd32b8171d1f17d5f8b8202b89c3f_prof);

        
        $__internal_1fa299aef1949f983af3de0a20c5c37eae8dbbef9ade86b3dcbc0fdac634443d->leave($__internal_1fa299aef1949f983af3de0a20c5c37eae8dbbef9ade86b3dcbc0fdac634443d_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_50998394f0e82f6668c8583d2673990a7d38b2b326c09c14684d0c3291463fb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50998394f0e82f6668c8583d2673990a7d38b2b326c09c14684d0c3291463fb5->enter($__internal_50998394f0e82f6668c8583d2673990a7d38b2b326c09c14684d0c3291463fb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_97d3754988049225afaca2d1ebc274ef326de9626d2760c7ffb1260d0194769d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97d3754988049225afaca2d1ebc274ef326de9626d2760c7ffb1260d0194769d->enter($__internal_97d3754988049225afaca2d1ebc274ef326de9626d2760c7ffb1260d0194769d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        // line 21
        echo "    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_approve", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        ";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_preview_decline", array(), "SonataAdminBundle"), "html", null, true);
        echo "
    </button>
";
        
        $__internal_97d3754988049225afaca2d1ebc274ef326de9626d2760c7ffb1260d0194769d->leave($__internal_97d3754988049225afaca2d1ebc274ef326de9626d2760c7ffb1260d0194769d_prof);

        
        $__internal_50998394f0e82f6668c8583d2673990a7d38b2b326c09c14684d0c3291463fb5->leave($__internal_50998394f0e82f6668c8583d2673990a7d38b2b326c09c14684d0c3291463fb5_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_8f688ae5338d50b2a555eaf44c015e9bc6e1676b62b8a73d5dd823f44088fe7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f688ae5338d50b2a555eaf44c015e9bc6e1676b62b8a73d5dd823f44088fe7f->enter($__internal_8f688ae5338d50b2a555eaf44c015e9bc6e1676b62b8a73d5dd823f44088fe7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_07466e3ff3ea0f5fe5f1bacbf814e24bc6fba657b9c730615c39d836a8412727 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07466e3ff3ea0f5fe5f1bacbf814e24bc6fba657b9c730615c39d836a8412727->enter($__internal_07466e3ff3ea0f5fe5f1bacbf814e24bc6fba657b9c730615c39d836a8412727_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()));
        foreach ($context['_seq'] as $context["name"] => $context["view_group"]) {
            // line 34
            echo "            <table class=\"table table-bordered\">
                ";
            // line 35
            if ($context["name"]) {
                // line 36
                echo "                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            ";
                // line 38
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                echo "
                        </td>
                    </tr>
                ";
            }
            // line 42
            echo "
                ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["view_group"], "fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 44
                echo "                    <tr class=\"sonata-ba-view-container\">
                        ";
                // line 45
                if ($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
                    echo "
                        ";
                }
                // line 48
                echo "                    </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo "            </table>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['name'], $context['view_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </div>
";
        
        $__internal_07466e3ff3ea0f5fe5f1bacbf814e24bc6fba657b9c730615c39d836a8412727->leave($__internal_07466e3ff3ea0f5fe5f1bacbf814e24bc6fba657b9c730615c39d836a8412727_prof);

        
        $__internal_8f688ae5338d50b2a555eaf44c015e9bc6e1676b62b8a73d5dd823f44088fe7f->leave($__internal_8f688ae5338d50b2a555eaf44c015e9bc6e1676b62b8a73d5dd823f44088fe7f_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_86a00ae0ba6070c776e76758649569f824e19ca1c3f27f6d860264d3843dd7c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86a00ae0ba6070c776e76758649569f824e19ca1c3f27f6d860264d3843dd7c0->enter($__internal_86a00ae0ba6070c776e76758649569f824e19ca1c3f27f6d860264d3843dd7c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_d3ef230b2fc4174cd49da9293a2c022e610cfe596461790b00efc636189849d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ef230b2fc4174cd49da9293a2c022e610cfe596461790b00efc636189849d1->enter($__internal_d3ef230b2fc4174cd49da9293a2c022e610cfe596461790b00efc636189849d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_d3ef230b2fc4174cd49da9293a2c022e610cfe596461790b00efc636189849d1->leave($__internal_d3ef230b2fc4174cd49da9293a2c022e610cfe596461790b00efc636189849d1_prof);

        
        $__internal_86a00ae0ba6070c776e76758649569f824e19ca1c3f27f6d860264d3843dd7c0->leave($__internal_86a00ae0ba6070c776e76758649569f824e19ca1c3f27f6d860264d3843dd7c0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 57,  195 => 56,  186 => 55,  175 => 52,  168 => 50,  161 => 48,  155 => 46,  153 => 45,  150 => 44,  146 => 43,  143 => 42,  136 => 38,  132 => 36,  130 => 35,  127 => 34,  123 => 33,  120 => 32,  111 => 31,  98 => 27,  91 => 23,  87 => 21,  78 => 20,  61 => 17,  44 => 14,  11 => 12,);
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

{% extends 'SonataAdminBundle:CRUD:edit.html.twig' %}

{% block actions %}
{% endblock %}

{% block side_menu %}
{% endblock %}

{% block formactions %}
    <button class=\"btn btn-success\" type=\"submit\" name=\"btn_preview_approve\">
        <i class=\"fa fa-check\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_approve'|trans({}, 'SonataAdminBundle') }}
    </button>
    <button class=\"btn btn-danger\" type=\"submit\" name=\"btn_preview_decline\">
        <i class=\"fa fa-times\" aria-hidden=\"true\"></i>
        {{ 'btn_preview_decline'|trans({}, 'SonataAdminBundle') }}
    </button>
{% endblock %}

{% block preview %}
    <div class=\"sonata-ba-view\">
        {% for name, view_group in admin.showgroups %}
            <table class=\"table table-bordered\">
                {% if name %}
                    <tr class=\"sonata-ba-view-title\">
                        <td colspan=\"2\">
                            {{ name|trans({}, admin.translationdomain) }}
                        </td>
                    </tr>
                {% endif %}

                {% for field_name in view_group.fields %}
                    <tr class=\"sonata-ba-view-container\">
                        {% if admin.show[field_name] is defined %}
                            {{ admin.show[field_name]|render_view_element(object) }}
                        {% endif %}
                    </tr>
                {% endfor %}
            </table>
        {% endfor %}
    </div>
{% endblock %}

{% block form %}
    <div class=\"sonata-preview-form-container\">
        {{ parent() }}
    </div>
{% endblock %}
", "@SonataAdmin/CRUD/preview.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
