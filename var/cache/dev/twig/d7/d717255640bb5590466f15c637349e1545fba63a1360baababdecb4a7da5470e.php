<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_53f250b6f6133f3f8fe2063f74eee1c50750d139e9904ce81afdff6f71c3da48 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
            'field' => array($this, 'block_field'),
            'field_value' => array($this, 'block_field_value'),
            'field_compare' => array($this, 'block_field_compare'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_be31a5930b3dffd6b1d32f0747fbae84a9eeb21abb29e7b500f7eae39172fbf8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be31a5930b3dffd6b1d32f0747fbae84a9eeb21abb29e7b500f7eae39172fbf8->enter($__internal_be31a5930b3dffd6b1d32f0747fbae84a9eeb21abb29e7b500f7eae39172fbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_0ef045c1859fb3305281f50b0c33ca361d3e65d12940173b142a4c655ff35547 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ef045c1859fb3305281f50b0c33ca361d3e65d12940173b142a4c655ff35547->enter($__internal_0ef045c1859fb3305281f50b0c33ca361d3e65d12940173b142a4c655ff35547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter((isset($context["is_diff"]) ? $context["is_diff"] : $this->getContext($context, "is_diff")), false)) : (false))) {
            echo " class=\"diff\"";
        }
        echo ">";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>";
        // line 14
        $this->displayBlock('field', $context, $blocks);
        // line 31
        echo "</td>

";
        // line 33
        $this->displayBlock('field_compare', $context, $blocks);
        
        $__internal_be31a5930b3dffd6b1d32f0747fbae84a9eeb21abb29e7b500f7eae39172fbf8->leave($__internal_be31a5930b3dffd6b1d32f0747fbae84a9eeb21abb29e7b500f7eae39172fbf8_prof);

        
        $__internal_0ef045c1859fb3305281f50b0c33ca361d3e65d12940173b142a4c655ff35547->leave($__internal_0ef045c1859fb3305281f50b0c33ca361d3e65d12940173b142a4c655ff35547_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_29ff2c08f91decb6942c9d27111d7f09c480cb646077baf25c025a98bb0a94a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29ff2c08f91decb6942c9d27111d7f09c480cb646077baf25c025a98bb0a94a8->enter($__internal_29ff2c08f91decb6942c9d27111d7f09c480cb646077baf25c025a98bb0a94a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_617a2c6ca25baaacbcc8e15b7b2d04be2264f836e4b983e57605d57dccfb21a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_617a2c6ca25baaacbcc8e15b7b2d04be2264f836e4b983e57605d57dccfb21a5->enter($__internal_617a2c6ca25baaacbcc8e15b7b2d04be2264f836e4b983e57605d57dccfb21a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_617a2c6ca25baaacbcc8e15b7b2d04be2264f836e4b983e57605d57dccfb21a5->leave($__internal_617a2c6ca25baaacbcc8e15b7b2d04be2264f836e4b983e57605d57dccfb21a5_prof);

        
        $__internal_29ff2c08f91decb6942c9d27111d7f09c480cb646077baf25c025a98bb0a94a8->leave($__internal_29ff2c08f91decb6942c9d27111d7f09c480cb646077baf25c025a98bb0a94a8_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_0e18b45c2748a4a8cd509c64be8bf06e601f9d9e0517170eb8195c7612a0eca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e18b45c2748a4a8cd509c64be8bf06e601f9d9e0517170eb8195c7612a0eca5->enter($__internal_0e18b45c2748a4a8cd509c64be8bf06e601f9d9e0517170eb8195c7612a0eca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_1c4487bd5469f069fbf1bd304b75c6b12f3e4f73238bf69204433de9d47c55f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c4487bd5469f069fbf1bd304b75c6b12f3e4f73238bf69204433de9d47c55f3->enter($__internal_1c4487bd5469f069fbf1bd304b75c6b12f3e4f73238bf69204433de9d47c55f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if ((isset($context["collapse"]) ? $context["collapse"] : $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["collapse"]) ? $context["collapse"] : null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                    ";
            // line 22
            $this->displayBlock('field_value', $context, $blocks);
            // line 25
            echo "                </div>
            ";
        } else {
            // line 27
            echo "                ";
            $this->displayBlock("field_value", $context, $blocks);
            echo "
            ";
        }
        // line 29
        echo "        ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1c4487bd5469f069fbf1bd304b75c6b12f3e4f73238bf69204433de9d47c55f3->leave($__internal_1c4487bd5469f069fbf1bd304b75c6b12f3e4f73238bf69204433de9d47c55f3_prof);

        
        $__internal_0e18b45c2748a4a8cd509c64be8bf06e601f9d9e0517170eb8195c7612a0eca5->leave($__internal_0e18b45c2748a4a8cd509c64be8bf06e601f9d9e0517170eb8195c7612a0eca5_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_a70248e5e4af2514b2084dc4e3e42636f8ebb8be018598aa25a1e4ecc559075d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a70248e5e4af2514b2084dc4e3e42636f8ebb8be018598aa25a1e4ecc559075d->enter($__internal_a70248e5e4af2514b2084dc4e3e42636f8ebb8be018598aa25a1e4ecc559075d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_c64920b3062cda1a9f4849e99dfdc8386a56ed0b41e2f90ba654c49a472b2c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c64920b3062cda1a9f4849e99dfdc8386a56ed0b41e2f90ba654c49a472b2c96->enter($__internal_c64920b3062cda1a9f4849e99dfdc8386a56ed0b41e2f90ba654c49a472b2c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_c64920b3062cda1a9f4849e99dfdc8386a56ed0b41e2f90ba654c49a472b2c96->leave($__internal_c64920b3062cda1a9f4849e99dfdc8386a56ed0b41e2f90ba654c49a472b2c96_prof);

        
        $__internal_a70248e5e4af2514b2084dc4e3e42636f8ebb8be018598aa25a1e4ecc559075d->leave($__internal_a70248e5e4af2514b2084dc4e3e42636f8ebb8be018598aa25a1e4ecc559075d_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_c04f7477fcb6b9adef5437e723daf84b68b77fbf3ef1ac2f286956674498abd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c04f7477fcb6b9adef5437e723daf84b68b77fbf3ef1ac2f286956674498abd1->enter($__internal_c04f7477fcb6b9adef5437e723daf84b68b77fbf3ef1ac2f286956674498abd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_f5dd4d400aa235482fe8fcabd8c89ac391488484f6a1e996dff54e935ee07bc9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5dd4d400aa235482fe8fcabd8c89ac391488484f6a1e996dff54e935ee07bc9->enter($__internal_f5dd4d400aa235482fe8fcabd8c89ac391488484f6a1e996dff54e935ee07bc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = (isset($context["value_compare"]) ? $context["value_compare"] : $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_f5dd4d400aa235482fe8fcabd8c89ac391488484f6a1e996dff54e935ee07bc9->leave($__internal_f5dd4d400aa235482fe8fcabd8c89ac391488484f6a1e996dff54e935ee07bc9_prof);

        
        $__internal_c04f7477fcb6b9adef5437e723daf84b68b77fbf3ef1ac2f286956674498abd1->leave($__internal_c04f7477fcb6b9adef5437e723daf84b68b77fbf3ef1ac2f286956674498abd1_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show_field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 37,  170 => 36,  167 => 35,  164 => 34,  155 => 33,  145 => 24,  138 => 23,  129 => 22,  118 => 29,  112 => 27,  108 => 25,  106 => 22,  102 => 21,  98 => 20,  94 => 19,  91 => 18,  88 => 17,  85 => 16,  83 => 15,  74 => 14,  56 => 12,  46 => 33,  42 => 31,  40 => 14,  32 => 12,  29 => 11,);
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

<th{% if(is_diff|default(false)) %} class=\"diff\"{% endif %}>{% block name %}{{ field_description.label|trans({}, field_description.translationDomain ?: admin.translationDomain) }}{% endblock %}</th>
<td>
    {%- block field -%}
        {% spaceless %}
            {% set collapse = field_description.options.collapse|default(false) %}
            {% if collapse %}
                <div class=\"sonata-readmore\"
                      data-readmore-height=\"{{ collapse.height|default(40) }}\"
                      data-readmore-more=\"{{ collapse.more|default('read_more')|trans({}, 'SonataAdminBundle') }}\"
                      data-readmore-less=\"{{ collapse.less|default('read_less')|trans({}, 'SonataAdminBundle') }}\">
                    {% block field_value %}
                        {% if field_description.options.safe %}{{ value|raw }}{% else %}{{ value|nl2br }}{% endif %}
                    {% endblock %}
                </div>
            {% else %}
                {{ block('field_value') }}
            {% endif %}
        {% endspaceless %}
    {%- endblock -%}
</td>

{% block field_compare %}
    {% if(value_compare is defined) %}
        <td>
            {% set value = value_compare %}
            {{ block('field') }}
        </td>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
