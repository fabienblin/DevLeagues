<?php

/* @SonataCore/Form/colorpicker.html.twig */
class __TwigTemplate_bc5d0f71f1c24406d9baf075b14f2bec33b7872f609b82fb0da794e12cbd106a extends Twig_Template
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
        $__internal_3d34e04aaa8234940b0cc15e32d2b4063900cbc16d0c18979e93405a33ffb159 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d34e04aaa8234940b0cc15e32d2b4063900cbc16d0c18979e93405a33ffb159->enter($__internal_3d34e04aaa8234940b0cc15e32d2b4063900cbc16d0c18979e93405a33ffb159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        $__internal_8b640568e71141979fdeff573cab896d9809ee06ef6d6980ce7cb3ea102683e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b640568e71141979fdeff573cab896d9809ee06ef6d6980ce7cb3ea102683e8->enter($__internal_8b640568e71141979fdeff573cab896d9809ee06ef6d6980ce7cb3ea102683e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_3d34e04aaa8234940b0cc15e32d2b4063900cbc16d0c18979e93405a33ffb159->leave($__internal_3d34e04aaa8234940b0cc15e32d2b4063900cbc16d0c18979e93405a33ffb159_prof);

        
        $__internal_8b640568e71141979fdeff573cab896d9809ee06ef6d6980ce7cb3ea102683e8->leave($__internal_8b640568e71141979fdeff573cab896d9809ee06ef6d6980ce7cb3ea102683e8_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_06b00e21951b298b0a73e665508c23eb0da18ca2ca34b1aefec8d98fb89ebc1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06b00e21951b298b0a73e665508c23eb0da18ca2ca34b1aefec8d98fb89ebc1b->enter($__internal_06b00e21951b298b0a73e665508c23eb0da18ca2ca34b1aefec8d98fb89ebc1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_6dc323cd2e48937c33ddf0413bb95dabd83d2c527d9d924cb00de208ff942240 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dc323cd2e48937c33ddf0413bb95dabd83d2c527d9d924cb00de208ff942240->enter($__internal_6dc323cd2e48937c33ddf0413bb95dabd83d2c527d9d924cb00de208ff942240_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

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
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
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
        
        $__internal_6dc323cd2e48937c33ddf0413bb95dabd83d2c527d9d924cb00de208ff942240->leave($__internal_6dc323cd2e48937c33ddf0413bb95dabd83d2c527d9d924cb00de208ff942240_prof);

        
        $__internal_06b00e21951b298b0a73e665508c23eb0da18ca2ca34b1aefec8d98fb89ebc1b->leave($__internal_06b00e21951b298b0a73e665508c23eb0da18ca2ca34b1aefec8d98fb89ebc1b_prof);

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
", "@SonataCore/Form/colorpicker.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/core-bundle/Resources/views/Form/colorpicker.html.twig");
    }
}
