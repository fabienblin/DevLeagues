<?php

/* @SonataCore/Form/colorpicker.html.twig */
class __TwigTemplate_f3fe55db779306e74611388e39dc39c2faeeb3b45293f77c0fc5eca466ba7056 extends Twig_Template
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
        $__internal_7029b8c502192c483a975affd6ef5c494eeaba8c871aaf1eea4067a430a519a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7029b8c502192c483a975affd6ef5c494eeaba8c871aaf1eea4067a430a519a4->enter($__internal_7029b8c502192c483a975affd6ef5c494eeaba8c871aaf1eea4067a430a519a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        $__internal_ba9d08dfd87e0b6ad0bc4103c89c7946f7f87b7fc8e0373374547368267ea3b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba9d08dfd87e0b6ad0bc4103c89c7946f7f87b7fc8e0373374547368267ea3b8->enter($__internal_ba9d08dfd87e0b6ad0bc4103c89c7946f7f87b7fc8e0373374547368267ea3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataCore/Form/colorpicker.html.twig"));

        // line 11
        $this->displayBlock('sonata_type_color_selector_widget', $context, $blocks);
        
        $__internal_7029b8c502192c483a975affd6ef5c494eeaba8c871aaf1eea4067a430a519a4->leave($__internal_7029b8c502192c483a975affd6ef5c494eeaba8c871aaf1eea4067a430a519a4_prof);

        
        $__internal_ba9d08dfd87e0b6ad0bc4103c89c7946f7f87b7fc8e0373374547368267ea3b8->leave($__internal_ba9d08dfd87e0b6ad0bc4103c89c7946f7f87b7fc8e0373374547368267ea3b8_prof);

    }

    public function block_sonata_type_color_selector_widget($context, array $blocks = array())
    {
        $__internal_24800a0ad57e7aa9dc27f053aa7ba4ee7753a891c4f12b802d4ee9a1b5325eac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24800a0ad57e7aa9dc27f053aa7ba4ee7753a891c4f12b802d4ee9a1b5325eac->enter($__internal_24800a0ad57e7aa9dc27f053aa7ba4ee7753a891c4f12b802d4ee9a1b5325eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

        $__internal_74059e862c8e18365cd9fe5014675d71dc9816284392368b9a6e09167e6a7887 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74059e862c8e18365cd9fe5014675d71dc9816284392368b9a6e09167e6a7887->enter($__internal_74059e862c8e18365cd9fe5014675d71dc9816284392368b9a6e09167e6a7887_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_type_color_selector_widget"));

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
        
        $__internal_74059e862c8e18365cd9fe5014675d71dc9816284392368b9a6e09167e6a7887->leave($__internal_74059e862c8e18365cd9fe5014675d71dc9816284392368b9a6e09167e6a7887_prof);

        
        $__internal_24800a0ad57e7aa9dc27f053aa7ba4ee7753a891c4f12b802d4ee9a1b5325eac->leave($__internal_24800a0ad57e7aa9dc27f053aa7ba4ee7753a891c4f12b802d4ee9a1b5325eac_prof);

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
