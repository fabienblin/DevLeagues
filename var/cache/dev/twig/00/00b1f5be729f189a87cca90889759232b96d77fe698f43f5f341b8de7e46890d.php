<?php

/* @SonataAdmin/CRUD/preview.html.twig */
class __TwigTemplate_49da2e5ec53cdaf93da89404e85ed0e13dd0c19cf2ca16d70c1a7ef1662f0a87 extends Twig_Template
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
        $__internal_63e08b7bb6269b6a2aa92ddea3881a8d7ae0b40c2f85f0fb34580d0dbfe27cac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63e08b7bb6269b6a2aa92ddea3881a8d7ae0b40c2f85f0fb34580d0dbfe27cac->enter($__internal_63e08b7bb6269b6a2aa92ddea3881a8d7ae0b40c2f85f0fb34580d0dbfe27cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/preview.html.twig"));

        $__internal_33331f6777f6b56df05fb35e1d101bd71189b6f2ffa2fb3985f530bbe103e567 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33331f6777f6b56df05fb35e1d101bd71189b6f2ffa2fb3985f530bbe103e567->enter($__internal_33331f6777f6b56df05fb35e1d101bd71189b6f2ffa2fb3985f530bbe103e567_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/preview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63e08b7bb6269b6a2aa92ddea3881a8d7ae0b40c2f85f0fb34580d0dbfe27cac->leave($__internal_63e08b7bb6269b6a2aa92ddea3881a8d7ae0b40c2f85f0fb34580d0dbfe27cac_prof);

        
        $__internal_33331f6777f6b56df05fb35e1d101bd71189b6f2ffa2fb3985f530bbe103e567->leave($__internal_33331f6777f6b56df05fb35e1d101bd71189b6f2ffa2fb3985f530bbe103e567_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a8cff2c73d758781ea75f0d9acefb81289c1bd7a4305bd81a4e6d3de19e81149 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8cff2c73d758781ea75f0d9acefb81289c1bd7a4305bd81a4e6d3de19e81149->enter($__internal_a8cff2c73d758781ea75f0d9acefb81289c1bd7a4305bd81a4e6d3de19e81149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_486853f2997d3ddae9fb2111bd96396515c8733a9851052e23f8268f2e0685b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_486853f2997d3ddae9fb2111bd96396515c8733a9851052e23f8268f2e0685b7->enter($__internal_486853f2997d3ddae9fb2111bd96396515c8733a9851052e23f8268f2e0685b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        
        $__internal_486853f2997d3ddae9fb2111bd96396515c8733a9851052e23f8268f2e0685b7->leave($__internal_486853f2997d3ddae9fb2111bd96396515c8733a9851052e23f8268f2e0685b7_prof);

        
        $__internal_a8cff2c73d758781ea75f0d9acefb81289c1bd7a4305bd81a4e6d3de19e81149->leave($__internal_a8cff2c73d758781ea75f0d9acefb81289c1bd7a4305bd81a4e6d3de19e81149_prof);

    }

    // line 17
    public function block_side_menu($context, array $blocks = array())
    {
        $__internal_d1c0c3550d8501d8526067022446debd52f465bd945a77461a9d944745e1ba43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1c0c3550d8501d8526067022446debd52f465bd945a77461a9d944745e1ba43->enter($__internal_d1c0c3550d8501d8526067022446debd52f465bd945a77461a9d944745e1ba43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        $__internal_f4d5ab55cb431de3955abf73386201620b6d71b347a29be26bb0fbad4efee613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4d5ab55cb431de3955abf73386201620b6d71b347a29be26bb0fbad4efee613->enter($__internal_f4d5ab55cb431de3955abf73386201620b6d71b347a29be26bb0fbad4efee613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side_menu"));

        
        $__internal_f4d5ab55cb431de3955abf73386201620b6d71b347a29be26bb0fbad4efee613->leave($__internal_f4d5ab55cb431de3955abf73386201620b6d71b347a29be26bb0fbad4efee613_prof);

        
        $__internal_d1c0c3550d8501d8526067022446debd52f465bd945a77461a9d944745e1ba43->leave($__internal_d1c0c3550d8501d8526067022446debd52f465bd945a77461a9d944745e1ba43_prof);

    }

    // line 20
    public function block_formactions($context, array $blocks = array())
    {
        $__internal_1539e1eb04dadc3924e0af4be6beaf4803d0178972a1e76238fa9e478006a107 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1539e1eb04dadc3924e0af4be6beaf4803d0178972a1e76238fa9e478006a107->enter($__internal_1539e1eb04dadc3924e0af4be6beaf4803d0178972a1e76238fa9e478006a107_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

        $__internal_d49291b29aed03fcd162930df040e9f803040a2ea5f8b9781785cce9028b7874 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d49291b29aed03fcd162930df040e9f803040a2ea5f8b9781785cce9028b7874->enter($__internal_d49291b29aed03fcd162930df040e9f803040a2ea5f8b9781785cce9028b7874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "formactions"));

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
        
        $__internal_d49291b29aed03fcd162930df040e9f803040a2ea5f8b9781785cce9028b7874->leave($__internal_d49291b29aed03fcd162930df040e9f803040a2ea5f8b9781785cce9028b7874_prof);

        
        $__internal_1539e1eb04dadc3924e0af4be6beaf4803d0178972a1e76238fa9e478006a107->leave($__internal_1539e1eb04dadc3924e0af4be6beaf4803d0178972a1e76238fa9e478006a107_prof);

    }

    // line 31
    public function block_preview($context, array $blocks = array())
    {
        $__internal_98030275f6ddee6ab3b5881fd8cc85d7d9ab481ec5e9d5a8fcca82e642e99fa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98030275f6ddee6ab3b5881fd8cc85d7d9ab481ec5e9d5a8fcca82e642e99fa5->enter($__internal_98030275f6ddee6ab3b5881fd8cc85d7d9ab481ec5e9d5a8fcca82e642e99fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_a577ce91f2b03c941af73e96eebc1f5157a0f3b779862106ee8aa7c84433c306 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a577ce91f2b03c941af73e96eebc1f5157a0f3b779862106ee8aa7c84433c306->enter($__internal_a577ce91f2b03c941af73e96eebc1f5157a0f3b779862106ee8aa7c84433c306_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        // line 32
        echo "    <div class=\"sonata-ba-view\">
        ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()));
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
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
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
                if ($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "show", array(), "any", false, true), $context["field_name"], array(), "array", true, true)) {
                    // line 46
                    echo "                            ";
                    echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "show", array()), $context["field_name"], array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
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
        
        $__internal_a577ce91f2b03c941af73e96eebc1f5157a0f3b779862106ee8aa7c84433c306->leave($__internal_a577ce91f2b03c941af73e96eebc1f5157a0f3b779862106ee8aa7c84433c306_prof);

        
        $__internal_98030275f6ddee6ab3b5881fd8cc85d7d9ab481ec5e9d5a8fcca82e642e99fa5->leave($__internal_98030275f6ddee6ab3b5881fd8cc85d7d9ab481ec5e9d5a8fcca82e642e99fa5_prof);

    }

    // line 55
    public function block_form($context, array $blocks = array())
    {
        $__internal_8ac71f2f89623a011f922c42d4e90fc2c51e21fc50004e8323e205594ceb18a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac71f2f89623a011f922c42d4e90fc2c51e21fc50004e8323e205594ceb18a1->enter($__internal_8ac71f2f89623a011f922c42d4e90fc2c51e21fc50004e8323e205594ceb18a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_a4569c68fae4e92bf02676f136268d00b19eaa944dce0001c4c83120a39f6ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4569c68fae4e92bf02676f136268d00b19eaa944dce0001c4c83120a39f6ed7->enter($__internal_a4569c68fae4e92bf02676f136268d00b19eaa944dce0001c4c83120a39f6ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 56
        echo "    <div class=\"sonata-preview-form-container\">
        ";
        // line 57
        $this->displayParentBlock("form", $context, $blocks);
        echo "
    </div>
";
        
        $__internal_a4569c68fae4e92bf02676f136268d00b19eaa944dce0001c4c83120a39f6ed7->leave($__internal_a4569c68fae4e92bf02676f136268d00b19eaa944dce0001c4c83120a39f6ed7_prof);

        
        $__internal_8ac71f2f89623a011f922c42d4e90fc2c51e21fc50004e8323e205594ceb18a1->leave($__internal_8ac71f2f89623a011f922c42d4e90fc2c51e21fc50004e8323e205594ceb18a1_prof);

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
", "@SonataAdmin/CRUD/preview.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/preview.html.twig");
    }
}
