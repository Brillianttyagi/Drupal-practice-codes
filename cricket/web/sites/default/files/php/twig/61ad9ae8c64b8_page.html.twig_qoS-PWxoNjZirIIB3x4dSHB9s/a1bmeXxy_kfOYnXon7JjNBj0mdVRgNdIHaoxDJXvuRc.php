<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* themes/custom/new_cricket/template/page.html.twig */
class __TwigTemplate_16385474abde490d4038a9ec1293ee8ff9009dae75fd4e307f6c2299b0071fb9 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["for" => 66];
        $filters = ["escape" => 18];
        $functions = ["drupal_view" => 65, "drupal_url" => 190, "kint" => 319];

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape'],
                ['drupal_view', 'drupal_url', 'kint']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453 = $this->env->getExtension("Drupal\\webprofiler\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->enter($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "themes/custom/new_cricket/template/page.html.twig"));

        // line 1
        echo "<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Cricket</title>
    <link rel=\"stylesheet\" href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css\" integrity=\"sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T\" crossorigin=\"anonymous\">
    <link rel=\"stylesheet\" href=\"css/style.css\">
</head>
<body>

    
    <nav class=\"cricket-navbar\">
        <div class=\"logo-box\"> 
            <li class=\"logo\"><img src=\"themes/custom/new_cricket/images/cricket8.png\"></li>
        </div>
        <div class=\"navbar-links\">
            ";
        // line 18
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
        echo "
        </div>
        <div class=\"navbar-search\">
            ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
        echo "
        </div>
    </nav> 

    <div id=\"carouselExampleIndicators\" class=\"carousel slide\" data-ride=\"carousel\">
        <ol class=\"carousel-indicators\">
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"0\" class=\"active\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"1\"></li>
          <li data-target=\"#carouselExampleIndicators\" data-slide-to=\"2\"></li>
        </ol>
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img src=\"images/img1.png\" alt=\"...\">
                <div class=\"carousel-caption d-none d-md-block\">
                  <h5>CRICKET FEVER IS BACK AGAIN</h5>
                  <p>RCB And Ml Will Kickstart The 14th Edition Of The Tournament In Chennai</p>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/img2.jpg\" alt=\"...\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>CRICKET FEVER IS BACK AGAIN</h5>
                    <p>RCB And Ml Will Kickstart The 14th Edition Of The Tournament In Chennai</p>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img src=\"images/img3.jpg\" alt=\"...\">
                <div class=\"carousel-caption d-none d-md-block\">
                    <h5>CRICKET FEVER IS BACK AGAIN</h5>
                    <p>RCB And Ml Will Kickstart The 14th Edition Of The Tournament In Chennai</p>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"prev\">
          <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next\" href=\"#carouselExampleIndicators\" role=\"button\" data-slide=\"next\">
          <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
          <span class=\"sr-only\">Next</span>
        </a>
      </div>
    <div>
    ";
        // line 64
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
    ";
        // line 65
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, views_embed_view("match_box"), "html", null, true);
        echo "
    ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(views_embed_view("match_box"));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 67
            echo "        <h1>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["i"], "field_country2", [])), "html", null, true);
            echo "</h1>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "    </div>
    <div class=\"match-centre\">
        <h4>Match Centre</h4>
    </div>
    <div class=\"box\">
        
        <div class=\"match_centre_box\">
            <div class=\"match_centre_upper\">
            <span class=\"match_centre_title\">T20</span>
            <span class=\"match_centre_location\">Lord's</span>
            </div> 
            <div class=\"match_centre_lower\">
            <div class='country1'>
                <span class=\"country1_name\">IND</span>
                <span class=\"country1_score\">153/6</span>
            </div>
            <span id=\"vs\">V</span>
            <div class='country1'>
                <span class=\"country1_name\">EN`G</span>
                <span class=\"country1_score\">154/2</span>
            </div>
            </div>
            <div class=\"match_centre_footer\"> 
            <p class=\"match_centre_desc\">
                ENG women won by 8 wickets
            </p>
            <p class=\"match_centre_date\">
                Jul 15 ,2021
            </p>
            </div>
        </div>
        <div class=\"match_centre_box\">
            <div class=\"match_centre_upper\">
            <span class=\"match_centre_title\">T20</span>
            <span class=\"match_centre_location\">Lord's</span>
            </div> 
            <div class=\"match_centre_lower\">
            <div class='country1'>
                <span class=\"country1_name\">IND</span>
                <span class=\"country1_score\">153/6</span>
            </div>
            <span id=\"vs\">V</span>
            <div class='country1'>
                <span class=\"country1_name\">ENG</span>
                <span class=\"country1_score\">154/2</span>
            </div>
            </div>
            <div class=\"match_centre_footer\"> 
            <p class=\"match_centre_desc\">
                ENG women won by 8 wickets
            </p>
            <p class=\"match_centre_date\">
                Jul 15 ,2021
            </p>
            </div>
        </div>
        <div class=\"match_centre_box\">
            <div class=\"match_centre_upper\">
            <span class=\"match_centre_title\">T20</span>
            <span class=\"match_centre_location\">Lord's</span>
            </div> 
            <div class=\"match_centre_lower\">
            <div class='country1'>
                <span class=\"country1_name\">IND</span>
                <span class=\"country1_score\">153/6</span>
            </div>
            <span id=\"vs\">V</span>
            <div class='country1'>
                <span class=\"country1_name\">ENG</span>
                <span class=\"country1_score\">154/2</span>
            </div>
            </div>
            <div class=\"match_centre_footer\"> 
            <p class=\"match_centre_desc\">
                ENG women won by 8 wickets
            </p>
            <p class=\"match_centre_date\">
                Jul 15 ,2021
            </p>
            </div>
        </div>
        <div class=\"match_centre_box\">
            <div class=\"match_centre_upper\">
            <span class=\"match_centre_title\">T20</span>
            <span class=\"match_centre_location\">Lord's</span>
            </div> 
            <div class=\"match_centre_lower\">
            <div class='country1'>
                <span class=\"country1_name\">IND</span>
                <span class=\"country1_score\">153/6</span>
            </div>
            <span id=\"vs\">V</span>
            <div class='country1'>
                <span class=\"country1_name\">ENG</span>
                <span class=\"country1_score\">154/2</span>
            </div>
            </div>
            <div class=\"match_centre_footer\"> 
            <p class=\"match_centre_desc\">
                ENG women won by 8 wickets
            </p>
            <p class=\"match_centre_date\">
                Jul 15 ,2021
            </p>
            </div>
        </div>
    </div>


    <div class=\"match-centre\">
        <h4>Statistical Analysis</h4>
    </div>
    <div class=\"box\">
        <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"images/card_img.jpg\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"time-ago\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                    <circle cx=\"8\" cy=\"8\" r=\"6\"/>
                  </svg> 2 min ago</p>
              <h5 class=\"card-title\">Cricket Beehive Analysis</h5>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"";
        // line 190
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\twig_tweak\TwigExtension')->drupalUrl("node/1"), "html", null, true);
        echo "\" class=\"read-more-btn\">Read more <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right-short\" viewBox=\"0 0 16 16\">
                <path fill-rule=\"evenodd\" d=\"M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z\"/>
              </svg></a>
            </div>
          </div>
          <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"images/card_img.jpg\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"time-ago\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                    <circle cx=\"8\" cy=\"8\" r=\"6\"/>
                  </svg> 2 min ago</p>
              <h5 class=\"card-title\">Cricket Beehive Analysis</h5>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"#\" class=\"read-more-btn\">Read more<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right-short\" viewBox=\"0 0 16 16\">
                <path fill-rule=\"evenodd\" d=\"M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z\"/>
              </svg></a>
            </div>
          </div>
          <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"images/card_img.jpg\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"time-ago\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                    <circle cx=\"8\" cy=\"8\" r=\"6\"/>
                  </svg> 2 min ago</p>
              <h5 class=\"card-title\">Cricket Beehive Analysis</h5>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"#\" class=\"read-more-btn\">Read more<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right-short\" viewBox=\"0 0 16 16\">
                <path fill-rule=\"evenodd\" d=\"M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z\"/>
              </svg></a>
            </div>
          </div>
          <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"images/card_img.jpg\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"time-ago\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                    <circle cx=\"8\" cy=\"8\" r=\"6\"/>
                  </svg> 2 min ago</p>
              <h5 class=\"card-title\">Cricket Beehive Analysis</h5>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"#\" class=\"read-more-btn\">Read more<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right-short\" viewBox=\"0 0 16 16\">
                <path fill-rule=\"evenodd\" d=\"M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z\"/>
              </svg></a>
            </div>
          </div>

    </div>
    <div class=\"match-centre\">
        <h4>Articles</h4>
    </div>
    <div class=\"box\">
        <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"images/cricket12.jpeg\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"time-ago\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                    <circle cx=\"8\" cy=\"8\" r=\"6\"/>
                  </svg> 2 min ago</p>
              <h5 class=\"card-title\">Cricket Beehive Analysis</h5>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"#\" class=\"read-more-btn\">Read more<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right-short\" viewBox=\"0 0 16 16\">
                <path fill-rule=\"evenodd\" d=\"M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z\"/>
              </svg></a>
            </div>
          </div>
          <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"images/cricket12.jpeg\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"time-ago\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                    <circle cx=\"8\" cy=\"8\" r=\"6\"/>
                  </svg> 2 min ago</p>
              <h5 class=\"card-title\">Cricket Beehive Analysis</h5>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"#\" class=\"read-more-btn\">Read more<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right-short\" viewBox=\"0 0 16 16\">
                <path fill-rule=\"evenodd\" d=\"M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z\"/>
              </svg></a>
            </div>
          </div>
          <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"images/cricket12.jpeg\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"time-ago\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                    <circle cx=\"8\" cy=\"8\" r=\"6\"/>
                  </svg> 2 min ago</p>
              <h5 class=\"card-title\">Cricket Beehive Analysis</h5>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"#\" class=\"read-more-btn\">Read more<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right-short\" viewBox=\"0 0 16 16\">
                <path fill-rule=\"evenodd\" d=\"M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z\"/>
              </svg></a>
            </div>
          </div>
          <div class=\"card\" style=\"width: 18rem;\">
            <img class=\"card-img-top\" src=\"images/cricket12.jpeg\" alt=\"Card image cap\">
            <div class=\"card-body\">
                <p class=\"time-ago\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-circle-fill\" viewBox=\"0 0 16 16\">
                    <circle cx=\"8\" cy=\"8\" r=\"6\"/>
                  </svg> 2 min ago</p>
              <h5 class=\"card-title\">Cricket Beehive Analysis</h5>
              <p class=\"card-text\">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href=\"#\" class=\"read-more-btn\">Read more<svg xmlns=\"http://www.w3.org/2000/svg\" width=\"16\" height=\"16\" fill=\"currentColor\" class=\"bi bi-arrow-right-short\" viewBox=\"0 0 16 16\">
                <path fill-rule=\"evenodd\" d=\"M4 8a.5.5 0 0 1 .5-.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5A.5.5 0 0 1 4 8z\"/>
              </svg></a>
            </div>
          </div>

    </div>
    <div class=\"match-centre\">
        <h4>Teams</h4>
    </div>
    <div class=\"box\">
        <div class=\"teams-img\">
            <img src=\"images/india.jpg\" alt=\"india\">
            <h4>India</h4>
        </div>
        <div class=\"teams-img\">
            <img src=\"images/india.jpg\" alt=\"india\">
            <h4>India</h4>
        </div>
        <div class=\"teams-img\">
            <img src=\"images/india.jpg\" alt=\"india\">
            <h4>India</h4>
        </div>
        <div class=\"teams-img\">
            <img src=\"images/india.jpg\" alt=\"india\">
            <h4>India</h4>
        </div>
        <div class=\"teams-img\">
            <img src=\"images/india.jpg\" alt=\"india\">
            <h4>India</h4>
        </div>
    </div>
    ";
        // line 319
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->env->getExtension('Drupal\devel\Twig\Extension\Debug')->dump($this->env, $context));
        echo "
    <div class=\"footer\">
        <img src=\"themes/custom/new_cricket/images/footer_logo.png\">
        <h4>&copy; 2021 Cricket8 | All Rights Reserved</h4>
        <h4>Privacy Policy   Term & Conditions</h4>

    </div>

    

</body>
<script src=\"https://code.jquery.com/jquery-3.3.1.slim.min.js\" integrity=\"sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo\" crossorigin=\"anonymous\"></script>
<script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js\" integrity=\"sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1\" crossorigin=\"anonymous\"></script>
<script src=\"https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js\" integrity=\"sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM\" crossorigin=\"anonymous\"></script>
</html>
";
        
        $__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453->leave($__internal_b8a44bb7188f10fa054f3681425c559c29de95cd0490f5c67a67412aafc0f453_prof);

    }

    public function getTemplateName()
    {
        return "themes/custom/new_cricket/template/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  405 => 319,  273 => 190,  150 => 69,  141 => 67,  137 => 66,  133 => 65,  129 => 64,  83 => 21,  77 => 18,  58 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/new_cricket/template/page.html.twig", "/var/www/html/cricket/web/themes/custom/new_cricket/template/page.html.twig");
    }
}
