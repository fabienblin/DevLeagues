<?php

/* SonataAdminBundle:CRUD:base_show_field.html.twig */
class __TwigTemplate_c4d7154ecc0eca11c33ebdd77e148b1cbd77709de368ecc0c3ca290d0c3076b1 extends Twig_Template
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
        $__internal_d983c28f60eca2702a52b344a0a484621d471018c0a317deaaf7552af03ba0bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d983c28f60eca2702a52b344a0a484621d471018c0a317deaaf7552af03ba0bc->enter($__internal_d983c28f60eca2702a52b344a0a484621d471018c0a317deaaf7552af03ba0bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        $__internal_f9a0a8fcef269e0f7924a2232e5b055d8560004c6eee0f40e82b306036cece77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9a0a8fcef269e0f7924a2232e5b055d8560004c6eee0f40e82b306036cece77->enter($__internal_f9a0a8fcef269e0f7924a2232e5b055d8560004c6eee0f40e82b306036cece77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show_field.html.twig"));

        // line 11
        echo "
<th";
        // line 12
        if (((array_key_exists("is_diff", $context)) ? (_twig_default_filter(($context["is_diff"] ?? $this->getContext($context, "is_diff")), false)) : (false))) {
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
        
        $__internal_d983c28f60eca2702a52b344a0a484621d471018c0a317deaaf7552af03ba0bc->leave($__internal_d983c28f60eca2702a52b344a0a484621d471018c0a317deaaf7552af03ba0bc_prof);

        
        $__internal_f9a0a8fcef269e0f7924a2232e5b055d8560004c6eee0f40e82b306036cece77->leave($__internal_f9a0a8fcef269e0f7924a2232e5b055d8560004c6eee0f40e82b306036cece77_prof);

    }

    // line 12
    public function block_name($context, array $blocks = array())
    {
        $__internal_e79ae9357dd15f82a9b3c5859b57e5ff5466349c3aee5e80b8e53be20993de32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e79ae9357dd15f82a9b3c5859b57e5ff5466349c3aee5e80b8e53be20993de32->enter($__internal_e79ae9357dd15f82a9b3c5859b57e5ff5466349c3aee5e80b8e53be20993de32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        $__internal_b30996a57b9b270d9d5acae098b77b7170dc8343ce5259f0669000244fbb0268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b30996a57b9b270d9d5acae098b77b7170dc8343ce5259f0669000244fbb0268->enter($__internal_b30996a57b9b270d9d5acae098b77b7170dc8343ce5259f0669000244fbb0268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "name"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "label", array()), array(), (($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) ? ($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        
        $__internal_b30996a57b9b270d9d5acae098b77b7170dc8343ce5259f0669000244fbb0268->leave($__internal_b30996a57b9b270d9d5acae098b77b7170dc8343ce5259f0669000244fbb0268_prof);

        
        $__internal_e79ae9357dd15f82a9b3c5859b57e5ff5466349c3aee5e80b8e53be20993de32->leave($__internal_e79ae9357dd15f82a9b3c5859b57e5ff5466349c3aee5e80b8e53be20993de32_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6b8801e83726a371c32900c3a597ac381a763be0e7b9da609833286c0231a70d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b8801e83726a371c32900c3a597ac381a763be0e7b9da609833286c0231a70d->enter($__internal_6b8801e83726a371c32900c3a597ac381a763be0e7b9da609833286c0231a70d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_35183ecf8f3d3e8403bb25f28092fc44cb273123d400526b1e340ec60640fbdf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35183ecf8f3d3e8403bb25f28092fc44cb273123d400526b1e340ec60640fbdf->enter($__internal_35183ecf8f3d3e8403bb25f28092fc44cb273123d400526b1e340ec60640fbdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        ob_start();
        // line 16
        echo "            ";
        $context["collapse"] = (($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["field_description"] ?? null), "options", array(), "any", false, true), "collapse", array()), false)) : (false));
        // line 17
        echo "            ";
        if (($context["collapse"] ?? $this->getContext($context, "collapse"))) {
            // line 18
            echo "                <div class=\"sonata-readmore\"
                      data-readmore-height=\"";
            // line 19
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collapse"] ?? null), "height", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "height", array()), 40)) : (40)), "html", null, true);
            echo "\"
                      data-readmore-more=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "more", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "more", array()), "read_more")) : ("read_more")), array(), "SonataAdminBundle"), "html", null, true);
            echo "\"
                      data-readmore-less=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((($this->getAttribute(($context["collapse"] ?? null), "less", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collapse"] ?? null), "less", array()), "read_less")) : ("read_less")), array(), "SonataAdminBundle"), "html", null, true);
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
        
        $__internal_35183ecf8f3d3e8403bb25f28092fc44cb273123d400526b1e340ec60640fbdf->leave($__internal_35183ecf8f3d3e8403bb25f28092fc44cb273123d400526b1e340ec60640fbdf_prof);

        
        $__internal_6b8801e83726a371c32900c3a597ac381a763be0e7b9da609833286c0231a70d->leave($__internal_6b8801e83726a371c32900c3a597ac381a763be0e7b9da609833286c0231a70d_prof);

    }

    // line 22
    public function block_field_value($context, array $blocks = array())
    {
        $__internal_9f1ef8a331efd58590e8197da4004af6623098597b90f7d49aef2866194b0cdb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f1ef8a331efd58590e8197da4004af6623098597b90f7d49aef2866194b0cdb->enter($__internal_9f1ef8a331efd58590e8197da4004af6623098597b90f7d49aef2866194b0cdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        $__internal_985349249eb8a53b72b09b2892b60a1f5189e7eb7f92da1c9abfc036175fd9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_985349249eb8a53b72b09b2892b60a1f5189e7eb7f92da1c9abfc036175fd9f1->enter($__internal_985349249eb8a53b72b09b2892b60a1f5189e7eb7f92da1c9abfc036175fd9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_value"));

        // line 23
        echo "                        ";
        if ($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "safe", array())) {
            echo ($context["value"] ?? $this->getContext($context, "value"));
        } else {
            echo nl2br(twig_escape_filter($this->env, ($context["value"] ?? $this->getContext($context, "value")), "html", null, true));
        }
        // line 24
        echo "                    ";
        
        $__internal_985349249eb8a53b72b09b2892b60a1f5189e7eb7f92da1c9abfc036175fd9f1->leave($__internal_985349249eb8a53b72b09b2892b60a1f5189e7eb7f92da1c9abfc036175fd9f1_prof);

        
        $__internal_9f1ef8a331efd58590e8197da4004af6623098597b90f7d49aef2866194b0cdb->leave($__internal_9f1ef8a331efd58590e8197da4004af6623098597b90f7d49aef2866194b0cdb_prof);

    }

    // line 33
    public function block_field_compare($context, array $blocks = array())
    {
        $__internal_58b462073085cab0d3befd7da98fd507075afaae18d9b43bd7fd17aa8c1fa282 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58b462073085cab0d3befd7da98fd507075afaae18d9b43bd7fd17aa8c1fa282->enter($__internal_58b462073085cab0d3befd7da98fd507075afaae18d9b43bd7fd17aa8c1fa282_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        $__internal_d73c2e224caeeaf12660ee5ff696550c051a41889f0848c50bcd18705a9e9d63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d73c2e224caeeaf12660ee5ff696550c051a41889f0848c50bcd18705a9e9d63->enter($__internal_d73c2e224caeeaf12660ee5ff696550c051a41889f0848c50bcd18705a9e9d63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_compare"));

        // line 34
        echo "    ";
        if (array_key_exists("value_compare", $context)) {
            // line 35
            echo "        <td>
            ";
            // line 36
            $context["value"] = ($context["value_compare"] ?? $this->getContext($context, "value_compare"));
            // line 37
            echo "            ";
            $this->displayBlock("field", $context, $blocks);
            echo "
        </td>
    ";
        }
        
        $__internal_d73c2e224caeeaf12660ee5ff696550c051a41889f0848c50bcd18705a9e9d63->leave($__internal_d73c2e224caeeaf12660ee5ff696550c051a41889f0848c50bcd18705a9e9d63_prof);

        
        $__internal_58b462073085cab0d3befd7da98fd507075afaae18d9b43bd7fd17aa8c1fa282->leave($__internal_58b462073085cab0d3befd7da98fd507075afaae18d9b43bd7fd17aa8c1fa282_prof);

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
", "SonataAdminBundle:CRUD:base_show_field.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show_field.html.twig");
    }
}
