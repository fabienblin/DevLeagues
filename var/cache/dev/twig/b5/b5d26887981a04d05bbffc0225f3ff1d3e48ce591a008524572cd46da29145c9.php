<?php

/* @SonataCore/Form/colorpicker.html.twig */
class __TwigTemplate_f5bb8dd19df7f22f3809674477ba2d96930fe517d96c0e9668e6582568d6144a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_type_color_selector_widget' => array($this, 'block_sonata_type_color_selector_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8a0ca9651b82898a20b453397ff657e6f0b5288388882ab6b2c6657981c7eb61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a0ca9651b82898a20b453397ff657e6f0b5288388882ab6b2c6657981c7eb61->enter($__internal_8a0ca9651b82898a20b453397ff657e6f0b5288388882ab6b2c6657981c7eb61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        $__internal_0165934337421cd8e13c81b2ff079c78b1670030a0b1001dc0c194a4fcdf1164 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0165934337421cd8e13c81b2ff079c78b1670030a0b1001dc0c194a4fcdf1164->enter($__internal_0165934337421cd8e13c81b2ff079c78b1670030a0b1001dc0c194a4fcdf1164_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_8a0ca9651b82898a20b453397ff657e6f0b5288388882ab6b2c6657981c7eb61->leave($__internal_8a0ca9651b82898a20b453397ff657e6f0b5288388882ab6b2c6657981c7eb61_prof);

        
        $__internal_0165934337421cd8e13c81b2ff079c78b1670030a0b1001dc0c194a4fcdf1164->leave($__internal_0165934337421cd8e13c81b2ff079c78b1670030a0b1001dc0c194a4fcdf1164_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_357901af42637ee16062af1bed06a0b217ab23428238c258d96aa8f037818066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_357901af42637ee16062af1bed06a0b217ab23428238c258d96aa8f037818066->enter($__internal_357901af42637ee16062af1bed06a0b217ab23428238c258d96aa8f037818066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_3538ed6e80b108285713ba708282274efe31cfcfe5aac5247647d92acaae8a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3538ed6e80b108285713ba708282274efe31cfcfe5aac5247647d92acaae8a77->enter($__internal_3538ed6e80b108285713ba708282274efe31cfcfe5aac5247647d92acaae8a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        // line 12
        echo "    ";
        $this->displayBlock("choice_widget", $context, $blocks);
        echo "
    ";
        // line 13
        ob_start();
        // line 14
        echo "        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#";
        // line 24
        echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
        echo "').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_3538ed6e80b108285713ba708282274efe31cfcfe5aac5247647d92acaae8a77->leave($__internal_3538ed6e80b108285713ba708282274efe31cfcfe5aac5247647d92acaae8a77_prof);

        
        $__internal_357901af42637ee16062af1bed06a0b217ab23428238c258d96aa8f037818066->leave($__internal_357901af42637ee16062af1bed06a0b217ab23428238c258d96aa8f037818066_prof);

    }

    public function getTemplateName()
    {
        return "@SonataCore/Form/colorpicker.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  63 => 24,  51 => 14,  49 => 13,  44 => 12,  26 => 11,);
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
{% block sonata_type_color_selector_widget %}
    {{ block('choice_widget') }}
    {% spaceless %}
        <script type=\"text/javascript\">
            jQuery(function (\$) {
                var select2FormatColorSelect = function format(state) {
                    if (!state.id || state.disabled) {
                        return state.text;
                    }

                    return ' <i class=\"fa fa-square\" style=\"color: '+ state.id +'\"></i> ' + state.text;
                };

                \$('#{{ id }}').select2({
                    formatResult:    select2FormatColorSelect,
                    formatSelection: select2FormatColorSelect,
                    width:           '100%',
                    escapeMarkup:    function(m) { return m; }
                });
            });
        </script>
    {% endspaceless %}
{% endblock sonata_type_color_selector_widget %}
", "@SonataCore/Form/colorpicker.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
