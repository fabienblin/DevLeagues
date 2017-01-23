<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_344ca5daf5df477070a5d26c24d31e27ba986fd45e1ab5ea5861fb56c639f069 extends Twig_Template
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
        $__internal_4969a387689ee30585dfd73dc45cafad6a38ade82b02d0f9f5d1afd9d34dbda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4969a387689ee30585dfd73dc45cafad6a38ade82b02d0f9f5d1afd9d34dbda9->enter($__internal_4969a387689ee30585dfd73dc45cafad6a38ade82b02d0f9f5d1afd9d34dbda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_7beead32bdb0515efe21dea157afd6eac2e69d1ea7a3cf1f7c613b31d89ab3df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7beead32bdb0515efe21dea157afd6eac2e69d1ea7a3cf1f7c613b31d89ab3df->enter($__internal_7beead32bdb0515efe21dea157afd6eac2e69d1ea7a3cf1f7c613b31d89ab3df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_4969a387689ee30585dfd73dc45cafad6a38ade82b02d0f9f5d1afd9d34dbda9->leave($__internal_4969a387689ee30585dfd73dc45cafad6a38ade82b02d0f9f5d1afd9d34dbda9_prof);

        
        $__internal_7beead32bdb0515efe21dea157afd6eac2e69d1ea7a3cf1f7c613b31d89ab3df->leave($__internal_7beead32bdb0515efe21dea157afd6eac2e69d1ea7a3cf1f7c613b31d89ab3df_prof);

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
", "@Framework/Form/datetime_widget.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
