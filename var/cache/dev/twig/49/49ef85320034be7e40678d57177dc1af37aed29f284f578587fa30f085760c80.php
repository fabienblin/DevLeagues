<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_f7be3a70ab13e3d876d491ab213cbd60569f59415f6306f6388652ddcb6661e3 extends Twig_Template
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
        $__internal_c1c3429288cf7887fed25b1ad2438aa89f6fbf46398128ac98260c79def6a44b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1c3429288cf7887fed25b1ad2438aa89f6fbf46398128ac98260c79def6a44b->enter($__internal_c1c3429288cf7887fed25b1ad2438aa89f6fbf46398128ac98260c79def6a44b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_b3216beab93cf2e424374d189f391ae27918091edb21bd20f3fa438d9c7c634c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3216beab93cf2e424374d189f391ae27918091edb21bd20f3fa438d9c7c634c->enter($__internal_b3216beab93cf2e424374d189f391ae27918091edb21bd20f3fa438d9c7c634c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c1c3429288cf7887fed25b1ad2438aa89f6fbf46398128ac98260c79def6a44b->leave($__internal_c1c3429288cf7887fed25b1ad2438aa89f6fbf46398128ac98260c79def6a44b_prof);

        
        $__internal_b3216beab93cf2e424374d189f391ae27918091edb21bd20f3fa438d9c7c634c->leave($__internal_b3216beab93cf2e424374d189f391ae27918091edb21bd20f3fa438d9c7c634c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
