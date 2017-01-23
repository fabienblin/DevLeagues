<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_88501330b7e7db3cbaa64229ad778b8f9f90e3b0ecd05162f007b1cef03aa28e extends Twig_Template
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
        $__internal_49f16fa85334620ce2253098564644bf8422f9687e4b39dce1e5f25d37db9c5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49f16fa85334620ce2253098564644bf8422f9687e4b39dce1e5f25d37db9c5d->enter($__internal_49f16fa85334620ce2253098564644bf8422f9687e4b39dce1e5f25d37db9c5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_255611be93549f9efb8b048913df11b231429db506cb367d066704562acd72e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_255611be93549f9efb8b048913df11b231429db506cb367d066704562acd72e5->enter($__internal_255611be93549f9efb8b048913df11b231429db506cb367d066704562acd72e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_49f16fa85334620ce2253098564644bf8422f9687e4b39dce1e5f25d37db9c5d->leave($__internal_49f16fa85334620ce2253098564644bf8422f9687e4b39dce1e5f25d37db9c5d_prof);

        
        $__internal_255611be93549f9efb8b048913df11b231429db506cb367d066704562acd72e5->leave($__internal_255611be93549f9efb8b048913df11b231429db506cb367d066704562acd72e5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
