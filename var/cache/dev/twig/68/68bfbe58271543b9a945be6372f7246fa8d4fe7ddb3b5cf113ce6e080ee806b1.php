<?php

/* @SonataAdmin/Button/create_button.html.twig */
class __TwigTemplate_611e80f86637252bef6ba8f142503efe4ad6b221c1b3bbdf2e36cff038758ad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0b381136d36f8dba0b182d46b9bd13754870f2955fbd9ccea3b4a0ed4aac2346 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b381136d36f8dba0b182d46b9bd13754870f2955fbd9ccea3b4a0ed4aac2346->enter($__internal_0b381136d36f8dba0b182d46b9bd13754870f2955fbd9ccea3b4a0ed4aac2346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/create_button.html.twig"));

        $__internal_94729dbf147ba7c1d05366f7e2b8292bf824c3e27b2ab2c023d51c7a67955ba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94729dbf147ba7c1d05366f7e2b8292bf824c3e27b2ab2c023d51c7a67955ba4->enter($__internal_94729dbf147ba7c1d05366f7e2b8292bf824c3e27b2ab2c023d51c7a67955ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Button/create_button.html.twig"));

        // line 11
        echo "
";
        // line 12
        if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasAccess", array(0 => "create"), "method") && $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "hasRoute", array(0 => "create"), "method"))) {
            // line 13
            echo "    ";
            if (twig_test_empty($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subClasses", array()))) {
                // line 14
                echo "        <a class=\"sonata-action-element\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create"), "method"), "html", null, true);
                echo "\">
            <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            ";
                // line 16
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                echo "</a>
    ";
            } else {
                // line 18
                echo "        <li class=\"divider\" role=\"presentation\"></li>
        ";
                // line 19
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "subclasses", array())));
                foreach ($context['_seq'] as $context["_key"] => $context["subclass"]) {
                    // line 20
                    echo "            <li>
                <a href=\"";
                    // line 21
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "create", 1 => array("subclass" => $context["subclass"])), "method"), "html", null, true);
                    echo "\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_action_create", array(), "SonataAdminBundle"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["subclass"], array(), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationdomain", array())), "html", null, true);
                    echo "
                </a>
            </li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subclass'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 27
                echo "        <li class=\"divider\" role=\"presentation\"></li>
    ";
            }
        }
        
        $__internal_0b381136d36f8dba0b182d46b9bd13754870f2955fbd9ccea3b4a0ed4aac2346->leave($__internal_0b381136d36f8dba0b182d46b9bd13754870f2955fbd9ccea3b4a0ed4aac2346_prof);

        
        $__internal_94729dbf147ba7c1d05366f7e2b8292bf824c3e27b2ab2c023d51c7a67955ba4->leave($__internal_94729dbf147ba7c1d05366f7e2b8292bf824c3e27b2ab2c023d51c7a67955ba4_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Button/create_button.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 27,  59 => 23,  54 => 21,  51 => 20,  47 => 19,  44 => 18,  39 => 16,  33 => 14,  30 => 13,  28 => 12,  25 => 11,);
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

{% if admin.hasAccess('create') and admin.hasRoute('create') %}
    {% if admin.subClasses is empty %}
        <a class=\"sonata-action-element\" href=\"{{ admin.generateUrl('create') }}\">
            <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
            {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }}</a>
    {% else %}
        <li class=\"divider\" role=\"presentation\"></li>
        {% for subclass in admin.subclasses|keys %}
            <li>
                <a href=\"{{ admin.generateUrl('create', {'subclass': subclass}) }}\">
                    <i class=\"fa fa-plus-circle\" aria-hidden=\"true\"></i>
                    {{ 'link_action_create'|trans({}, 'SonataAdminBundle') }} {{ subclass|trans({}, admin.translationdomain) }}
                </a>
            </li>
        {% endfor %}
        <li class=\"divider\" role=\"presentation\"></li>
    {% endif %}
{% endif %}
", "@SonataAdmin/Button/create_button.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/Button/create_button.html.twig");
    }
}
