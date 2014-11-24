<?php

/* SMSSNBundle::layout.html.twig */
class __TwigTemplate_4cdcf94d9080cdb4a427f834235aee38e1865663d762b6217ca8089d20f07feb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
    ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 13
        echo "    </head>
    <body>
        <div id=\"content\">
            <div id=\"header\">
                ";
        // line 17
        $this->displayBlock('header', $context, $blocks);
        // line 41
        echo "            </div>
            
            <div id=\"container\">
                ";
        // line 44
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "            </div>
            <div id=\"footer\">
                ";
        // line 77
        $this->displayBlock('footer', $context, $blocks);
        // line 80
        echo "            </div>
        </div>
        ";
        // line 82
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "    </body>
</html>";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "        <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/smssn/css/style.css"), "html", null, true);
        echo "\" />
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,900' rel='stylesheet' type='text/css'>
        <meta charset=\"UTF-8\" />
        <title>SSN</title>
        ";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 17
    public function block_header($context, array $blocks = array())
    {
        // line 18
        echo "                    <h1>SSN</h1>
                    <nav>
                        <ul id=\"userNav\">
                            <li><a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getUrl("smssn_homepage");
        echo "\">HOME</a></li>

                            <div>
                                ";
        // line 24
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 25
            echo "                                    <li>
                                        <a href=\"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
                                            ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
                                        </a>
                                    </li>
                                ";
        } else {
            // line 31
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getUrl("fos_user_security_login");
            echo "\">Login</a></li>
                                   <li><a href=\"";
            // line 32
            echo $this->env->getExtension('routing')->getUrl("fos_user_registration_register");
            echo "\">Register</a></li>
                                ";
        }
        // line 34
        echo "                            </div>

                            
                        </ul>
                    </nav>
                
                ";
    }

    // line 44
    public function block_body($context, array $blocks = array())
    {
        // line 45
        echo "                    


                    ";
        // line 48
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 49
            echo "                        <div class=\"flash-message\">
                            <em>Notice</em>: ";
            // line 50
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                


                    <div class=\"content\">
                        ";
        // line 57
        $this->displayBlock('content', $context, $blocks);
        // line 63
        echo "                        <div class=\"clear\"></div>
                    </div>


                
                    ";
        // line 68
        if (array_key_exists("code", $context)) {
            // line 69
            echo "                        <h2>Code behind this page</h2>
                        <div class=\"block\">
                            <div class=\"symfony-content\">";
            // line 71
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
                        </div>
                    ";
        }
        // line 74
        echo "                ";
    }

    // line 57
    public function block_content($context, array $blocks = array())
    {
        // line 58
        echo "                            <div>
                                ";
        // line 59
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 61
        echo "                            </div>
                        ";
    }

    // line 59
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 60
        echo "                                ";
    }

    // line 77
    public function block_footer($context, array $blocks = array())
    {
        // line 78
        echo "                    
                ";
    }

    // line 82
    public function block_javascripts($context, array $blocks = array())
    {
        // line 83
        echo "        
        ";
    }

    public function getTemplateName()
    {
        return "SMSSNBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  231 => 83,  228 => 82,  223 => 78,  220 => 77,  216 => 60,  213 => 59,  208 => 61,  206 => 59,  203 => 58,  200 => 57,  196 => 74,  190 => 71,  186 => 69,  184 => 68,  177 => 63,  175 => 57,  169 => 53,  160 => 50,  157 => 49,  153 => 48,  148 => 45,  145 => 44,  135 => 34,  130 => 32,  125 => 31,  118 => 27,  114 => 26,  111 => 25,  109 => 24,  103 => 21,  98 => 18,  95 => 17,  90 => 10,  83 => 11,  81 => 10,  74 => 6,  69 => 5,  66 => 4,  61 => 85,  59 => 82,  55 => 80,  53 => 77,  49 => 75,  47 => 44,  42 => 41,  40 => 17,  34 => 13,  32 => 4,  27 => 1,);
    }
}
