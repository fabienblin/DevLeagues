<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8081c003b65a5503478906d99463467e0e7834b2e78ed8508871379fe3abb895 extends Twig_Template
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
        $__internal_87a0a6751f2327670d30f18e4235d0fc50fb8790f632a60febb81228b9050791 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87a0a6751f2327670d30f18e4235d0fc50fb8790f632a60febb81228b9050791->enter($__internal_87a0a6751f2327670d30f18e4235d0fc50fb8790f632a60febb81228b9050791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_733bfa5356e5d9eb5064395a70edefa97ae4cdcdb20820c1b1bf6dca2933bf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733bfa5356e5d9eb5064395a70edefa97ae4cdcdb20820c1b1bf6dca2933bf3f->enter($__internal_733bfa5356e5d9eb5064395a70edefa97ae4cdcdb20820c1b1bf6dca2933bf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_87a0a6751f2327670d30f18e4235d0fc50fb8790f632a60febb81228b9050791->leave($__internal_87a0a6751f2327670d30f18e4235d0fc50fb8790f632a60febb81228b9050791_prof);

        
        $__internal_733bfa5356e5d9eb5064395a70edefa97ae4cdcdb20820c1b1bf6dca2933bf3f->leave($__internal_733bfa5356e5d9eb5064395a70edefa97ae4cdcdb20820c1b1bf6dca2933bf3f_prof);

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
