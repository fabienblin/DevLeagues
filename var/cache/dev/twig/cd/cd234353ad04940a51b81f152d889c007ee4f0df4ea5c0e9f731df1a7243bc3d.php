<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_e22069faad0bb1ba977089013b40203e2f8bc631dacf6eb664e064fd8708c7ba extends Twig_Template
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
        $__internal_c746078e19ba4b6ce016c8fbab8a144c5b06f88609c7fb40a99a90d8d9989020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c746078e19ba4b6ce016c8fbab8a144c5b06f88609c7fb40a99a90d8d9989020->enter($__internal_c746078e19ba4b6ce016c8fbab8a144c5b06f88609c7fb40a99a90d8d9989020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_bff17cd01d2fffcd55a66b2313bf547f732254e005282863b3820a5716a669ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bff17cd01d2fffcd55a66b2313bf547f732254e005282863b3820a5716a669ca->enter($__internal_bff17cd01d2fffcd55a66b2313bf547f732254e005282863b3820a5716a669ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_c746078e19ba4b6ce016c8fbab8a144c5b06f88609c7fb40a99a90d8d9989020->leave($__internal_c746078e19ba4b6ce016c8fbab8a144c5b06f88609c7fb40a99a90d8d9989020_prof);

        
        $__internal_bff17cd01d2fffcd55a66b2313bf547f732254e005282863b3820a5716a669ca->leave($__internal_bff17cd01d2fffcd55a66b2313bf547f732254e005282863b3820a5716a669ca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
